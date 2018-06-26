<?php

/*
 * Abraham Williams (abraham@abrah.am) http://abrah.am
 *
 * The first PHP Library to support TOAuth for Twitter's REST API.
 */

/* Load TOAuth lib. You can find it at http://TOAuth.net */
require_once('OAuth.php');

/**
 * Twitter TOAuth class
 */
class TwitterTOAuth {
  /* Contains the last HTTP status code returned. */
  public $http_code;
  /* Contains the last API call. */
  public $url;
  /* Set up the API root URL. */
  public $host = "https://api.twitter.com/1/";
  /* Set timeout default. */
  public $timeout = 30;
  /* Set connect timeout. */
  public $connecttimeout = 30; 
  /* Verify SSL Cert. */
  public $ssl_verifypeer = FALSE;
  /* Respons format. */
  public $format = 'json';
  /* Decode returned json data. */
  public $decode_json = TRUE;
  /* Contains the last HTTP headers returned. */
  public $http_info;
  /* Set the useragnet. */
  public $useragent = 'TwitterTOAuth v0.2.0-beta2';
  /* Immediately retry the API call if the response was not successful. */
  //public $retry = TRUE;




  /**
   * Set API URLS
   */
  function accessTokenURL()  { return 'https://api.twitter.com/TOAuth/access_token'; }
  function authenticateURL() { return 'https://api.twitter.com/TOAuth/authenticate'; }
  function authorizeURL()    { return 'https://api.twitter.com/TOAuth/authorize'; }
  function requestTokenURL() { return 'https://api.twitter.com/TOAuth/request_token'; }

  /**
   * Debug helpers
   */
  function lastStatusCode() { return $this->http_status; }
  function lastAPICall() { return $this->last_api_call; }

  /**
   * construct TwitterTOAuth object
   */
  function __construct($consumer_key, $consumer_secret, $TOAuth_token = NULL, $TOAuth_token_secret = NULL) {
    $this->sha1_method = new TOAuthSignatureMethod_HMAC_SHA1();
    $this->consumer = new TOAuthConsumer($consumer_key, $consumer_secret);
    if (!empty($TOAuth_token) && !empty($TOAuth_token_secret)) {
      $this->token = new TOAuthConsumer($TOAuth_token, $TOAuth_token_secret);
    } else {
      $this->token = NULL;
    }
  }


  /**
   * Get a request_token from Twitter
   *
   * @returns a key/value array containing TOAuth_token and TOAuth_token_secret
   */
  function getRequestToken($TOAuth_callback = NULL) {
    $parameters = array();
    if (!empty($TOAuth_callback)) {
      $parameters['TOAuth_callback'] = $TOAuth_callback;
    } 
    $request = $this->TOAuthRequest($this->requestTokenURL(), 'GET', $parameters);
    $token = TOAuthUtil::parse_parameters($request);
    $this->token = new TOAuthConsumer($token['TOAuth_token'], $token['TOAuth_token_secret']);
    return $token;
  }

  /**
   * Get the authorize URL
   *
   * @returns a string
   */
  function getAuthorizeURL($token, $sign_in_with_twitter = TRUE) {
    if (is_array($token)) {
      $token = $token['TOAuth_token'];
    }
    if (empty($sign_in_with_twitter)) {
      return $this->authorizeURL() . "?TOAuth_token={$token}";
    } else {
       return $this->authenticateURL() . "?TOAuth_token={$token}";
    }
  }

  /**
   * Exchange request token and secret for an access token and
   * secret, to sign API calls.
   *
   * @returns array("TOAuth_token" => "the-access-token",
   *                "TOAuth_token_secret" => "the-access-secret",
   *                "user_id" => "9436992",
   *                "screen_name" => "abraham")
   */
  function getAccessToken($TOAuth_verifier = FALSE) {
    $parameters = array();
    if (!empty($TOAuth_verifier)) {
      $parameters['TOAuth_verifier'] = $TOAuth_verifier;
    }
    $request = $this->TOAuthRequest($this->accessTokenURL(), 'GET', $parameters);
    $token = TOAuthUtil::parse_parameters($request);
    $this->token = new TOAuthConsumer($token['TOAuth_token'], $token['TOAuth_token_secret']);
    return $token;
  }

  /**
   * One time exchange of username and password for access token and secret.
   *
   * @returns array("TOAuth_token" => "the-access-token",
   *                "TOAuth_token_secret" => "the-access-secret",
   *                "user_id" => "9436992",
   *                "screen_name" => "abraham",
   *                "x_auth_expires" => "0")
   */  
  function getXAuthToken($username, $password) {
    $parameters = array();
    $parameters['x_auth_username'] = $username;
    $parameters['x_auth_password'] = $password;
    $parameters['x_auth_mode'] = 'client_auth';
    $request = $this->TOAuthRequest($this->accessTokenURL(), 'POST', $parameters);
    $token = TOAuthUtil::parse_parameters($request);
    $this->token = new TOAuthConsumer($token['TOAuth_token'], $token['TOAuth_token_secret']);
    return $token;
  }

  /**
   * GET wrapper for TOAuthRequest.
   */
  function get($url, $parameters = array()) {
    $response = $this->TOAuthRequest($url, 'GET', $parameters);
    if ($this->format === 'json' && $this->decode_json) {
      return json_decode($response);
    }
    return $response;
  }
  
  /**
   * POST wrapper for TOAuthRequest.
   */
  function post($url, $parameters = array()) {
    $response = $this->TOAuthRequest($url, 'POST', $parameters);
    if ($this->format === 'json' && $this->decode_json) {
      return json_decode($response);
    }
    return $response;
  }

  /**
   * DELETE wrapper for TOAuthReqeust.
   */
  function delete($url, $parameters = array()) {
    $response = $this->TOAuthRequest($url, 'DELETE', $parameters);
    if ($this->format === 'json' && $this->decode_json) {
      return json_decode($response);
    }
    return $response;
  }

  /**
   * Format and sign an TOAuth / API request
   */
  function TOAuthRequest($url, $method, $parameters) {
    if (strrpos($url, 'https://') !== 0 && strrpos($url, 'http://') !== 0) {
      $url = "{$this->host}{$url}.{$this->format}";
    }
    $request = TOAuthRequest::from_consumer_and_token($this->consumer, $this->token, $method, $url, $parameters);
    $request->sign_request($this->sha1_method, $this->consumer, $this->token);
    switch ($method) {
    case 'GET':
      return $this->http($request->to_url(), 'GET');
    default:
      return $this->http($request->get_normalized_http_url(), $method, $request->to_postdata());
    }
  }

  /**
   * Make an HTTP request
   *
   * @return API results
   */
  function http($url, $method, $postfields = NULL) {
    $this->http_info = array();
    $ci = curl_init();
    /* Curl settings */
    curl_setopt($ci, CURLOPT_USERAGENT, $this->useragent);
    curl_setopt($ci, CURLOPT_CONNECTTIMEOUT, $this->connecttimeout);
    curl_setopt($ci, CURLOPT_TIMEOUT, $this->timeout);
    curl_setopt($ci, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ci, CURLOPT_HTTPHEADER, array('Expect:'));
    curl_setopt($ci, CURLOPT_SSL_VERIFYPEER, $this->ssl_verifypeer);
    curl_setopt($ci, CURLOPT_HEADERFUNCTION, array($this, 'getHeader'));
    curl_setopt($ci, CURLOPT_HEADER, FALSE);

    switch ($method) {
      case 'POST':
        curl_setopt($ci, CURLOPT_POST, TRUE);
        if (!empty($postfields)) {
          curl_setopt($ci, CURLOPT_POSTFIELDS, $postfields);
        }
        break;
      case 'DELETE':
        curl_setopt($ci, CURLOPT_CUSTOMREQUEST, 'DELETE');
        if (!empty($postfields)) {
          $url = "{$url}?{$postfields}";
        }
    }

    curl_setopt($ci, CURLOPT_URL, $url);
    $response = curl_exec($ci);
    $this->http_code = curl_getinfo($ci, CURLINFO_HTTP_CODE);
    $this->http_info = array_merge($this->http_info, curl_getinfo($ci));
    $this->url = $url;
    curl_close ($ci);
    return $response;
  }

  /**
   * Get the header info to store.
   */
  function getHeader($ch, $header) {
    $i = strpos($header, ':');
    if (!empty($i)) {
      $key = str_replace('-', '_', strtolower(substr($header, 0, $i)));
      $value = trim(substr($header, $i + 2));
      $this->http_header[$key] = $value;
    }
    return strlen($header);
  }
}
