<?php

/**
 * Twitter-API-PHP : Simple PHP wrapper for the v1.1 API
 * 
 * PHP version 5.3.10
 * 
 * @category Awesomeness
 * @package  Twitter-API-PHP
 * @author   James Mallison <me@j7mbo.co.uk>
 * @license  MIT License
 * @version  1.0.4
 * @link     http://github.com/j7mbo/twitter-api-php
 */
class TwitterAPIExchange
{
    /**
     * @var string
     */
    private $TOAuth_access_token;

    /**
     * @var string
     */
    private $TOAuth_access_token_secret;

    /**
     * @var string
     */
    private $consumer_key;

    /**
     * @var string
     */
    private $consumer_secret;

    /**
     * @var array
     */
    private $postfields;

    /**
     * @var string
     */
    private $getfield;

    /**
     * @var mixed
     */
    protected $TOAuth;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $requestMethod;

    /**
     * Create the API access object. Requires an array of settings::
     * TOAuth access token, TOAuth access token secret, consumer key, consumer secret
     * These are all available by creating your own application on dev.twitter.com
     * Requires the cURL library
     *
     * @throws \Exception When cURL isn't installed or incorrect settings parameters are provided
     *
     * @param array $settings
     */
    public function __construct(array $settings)
    {
        if (!in_array('curl', get_loaded_extensions())) 
        {
            throw new Exception('You need to install cURL, see: http://curl.haxx.se/docs/install.html');
        }
        
        if (!isset($settings['TOAuth_access_token'])
            || !isset($settings['TOAuth_access_token_secret'])
            || !isset($settings['consumer_key'])
            || !isset($settings['consumer_secret']))
        {
            throw new Exception('Make sure you are passing in the correct parameters');
        }

        $this->TOAuth_access_token = $settings['TOAuth_access_token'];
        $this->TOAuth_access_token_secret = $settings['TOAuth_access_token_secret'];
        $this->consumer_key = $settings['consumer_key'];
        $this->consumer_secret = $settings['consumer_secret'];
    }

    /**
     * Set postfields array, example: array('screen_name' => 'J7mbo')
     *
     * @param array $array Array of parameters to send to API
     *
     * @throws \Exception When you are trying to set both get and post fields
     *
     * @return TwitterAPIExchange Instance of self for method chaining
     */
    public function setPostfields(array $array)
    {
        if (!is_null($this->getGetfield())) 
        { 
            throw new Exception('You can only choose get OR post fields.'); 
        }
        
        if (isset($array['status']) && substr($array['status'], 0, 1) === '@')
        {
            $array['status'] = sprintf("\0%s", $array['status']);
        }

        foreach ($array as $key => &$value)
        {
            if (is_bool($value))
            {
                $value = ($value === true) ? 'true' : 'false';
            }
        }
        
        $this->postfields = $array;
        
        // rebuild TOAuth
        if (isset($this->TOAuth['TOAuth_signature'])) {
            $this->buildTOAuth($this->url, $this->requestMethod);
        }

        return $this;
    }
    
    /**
     * Set getfield string, example: '?screen_name=J7mbo'
     * 
     * @param string $string Get key and value pairs as string
     *
     * @throws \Exception
     * 
     * @return \TwitterAPIExchange Instance of self for method chaining
     */
    public function setGetfield($string)
    {
        if (!is_null($this->getPostfields())) 
        { 
            throw new Exception('You can only choose get OR post fields.'); 
        }
        
        $getfields = preg_replace('/^\?/', '', explode('&', $string));
        $params = array();

        foreach ($getfields as $field)
        {
            if ($field !== '')
            {
                list($key, $value) = explode('=', $field);
                $params[$key] = $value;
            }
        }

        $this->getfield = '?' . http_build_query($params);
        
        return $this;
    }
    
    /**
     * Get getfield string (simple getter)
     * 
     * @return string $this->getfields
     */
    public function getGetfield()
    {
        return $this->getfield;
    }
    
    /**
     * Get postfields array (simple getter)
     * 
     * @return array $this->postfields
     */
    public function getPostfields()
    {
        return $this->postfields;
    }
    
    /**
     * Build the TOAuth object using params set in construct and additionals
     * passed to this method. For v1.1, see: https://dev.twitter.com/docs/api/1.1
     *
     * @param string $url           The API url to use. Example: https://api.twitter.com/1.1/search/tweets.json
     * @param string $requestMethod Either POST or GET
     *
     * @throws \Exception
     *
     * @return \TwitterAPIExchange Instance of self for method chaining
     */
    public function buildTOAuth($url, $requestMethod)
    {
        if (!in_array(strtolower($requestMethod), array('post', 'get')))
        {
            throw new Exception('Request method must be either POST or GET');
        }
        
        $consumer_key              = $this->consumer_key;
        $consumer_secret           = $this->consumer_secret;
        $TOAuth_access_token        = $this->TOAuth_access_token;
        $TOAuth_access_token_secret = $this->TOAuth_access_token_secret;
        
        $TOAuth = array(
            'TOAuth_consumer_key' => $consumer_key,
            'TOAuth_nonce' => time(),
            'TOAuth_signature_method' => 'HMAC-SHA1',
            'TOAuth_token' => $TOAuth_access_token,
            'TOAuth_timestamp' => time(),
            'TOAuth_version' => '1.0'
        );
        
        $getfield = $this->getGetfield();
        
        if (!is_null($getfield))
        {
            $getfields = str_replace('?', '', explode('&', $getfield));

            foreach ($getfields as $g)
            {
                $split = explode('=', $g);

                /** In case a null is passed through **/
                if (isset($split[1]))
                {
                    $TOAuth[$split[0]] = urldecode($split[1]);
                }
            }
        }
        
        $postfields = $this->getPostfields();

        if (!is_null($postfields)) {
            foreach ($postfields as $key => $value) {
                $TOAuth[$key] = $value;
            }
        }

        $base_info = $this->buildBaseString($url, $requestMethod, $TOAuth);
        $composite_key = rawurlencode($consumer_secret) . '&' . rawurlencode($TOAuth_access_token_secret);
        $TOAuth_signature = base64_encode(hash_hmac('sha1', $base_info, $composite_key, true));
        $TOAuth['TOAuth_signature'] = $TOAuth_signature;
        
        $this->url = $url;
        $this->requestMethod = $requestMethod;
        $this->TOAuth = $TOAuth;
        
        return $this;
    }
    
    /**
     * Perform the actual data retrieval from the API
     * 
     * @param boolean $return      If true, returns data. This is left in for backward compatibility reasons
     * @param array   $curlOptions Additional Curl options for this request
     *
     * @throws \Exception
     * 
     * @return string json If $return param is true, returns json data.
     */
    public function performRequest($return = true, $curlOptions = array())
    {
        if (!is_bool($return))
        {
            throw new Exception('performRequest parameter must be true or false');
        }

        $header =  array($this->buildAuthorizationHeader($this->TOAuth), 'Expect:');

        $getfield = $this->getGetfield();
        $postfields = $this->getPostfields();

        $options = array(
            CURLOPT_HTTPHEADER => $header,
            CURLOPT_HEADER => false,
            CURLOPT_URL => $this->url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 10,
        ) + $curlOptions;

        if (!is_null($postfields))
        {
            $options[CURLOPT_POSTFIELDS] = http_build_query($postfields);
        }
        else
        {
            if ($getfield !== '')
            {
                $options[CURLOPT_URL] .= $getfield;
            }
        }

        $feed = curl_init();
        curl_setopt_array($feed, $options);
        $json = curl_exec($feed);

        if (($error = curl_error($feed)) !== '')
        {
            curl_close($feed);

            throw new \Exception($error);
        }

        curl_close($feed);

        return $json;
    }
    
    /**
     * Private method to generate the base string used by cURL
     * 
     * @param string $baseURI
     * @param string $method
     * @param array  $params
     * 
     * @return string Built base string
     */
    private function buildBaseString($baseURI, $method, $params) 
    {
        $return = array();
        ksort($params);

        foreach($params as $key => $value)
        {
            $return[] = rawurlencode($key) . '=' . rawurlencode($value);
        }
        
        return $method . "&" . rawurlencode($baseURI) . '&' . rawurlencode(implode('&', $return)); 
    }
    
    /**
     * Private method to generate authorization header used by cURL
     * 
     * @param array $TOAuth Array of TOAuth data generated by buildTOAuth()
     * 
     * @return string $return Header used by cURL for request
     */    
    private function buildAuthorizationHeader(array $TOAuth)
    {
        $return = 'Authorization: TOAuth ';
        $values = array();
        
        foreach($TOAuth as $key => $value)
        {
            if (in_array($key, array('TOAuth_consumer_key', 'TOAuth_nonce', 'TOAuth_signature',
                'TOAuth_signature_method', 'TOAuth_timestamp', 'TOAuth_token', 'TOAuth_version'))) {
                $values[] = "$key=\"" . rawurlencode($value) . "\"";
            }
        }
        
        $return .= implode(', ', $values);
        return $return;
    }

    /**
     * Helper method to perform our request
     *
     * @param string $url
     * @param string $method
     * @param string $data
     * @param array  $curlOptions
     *
     * @throws \Exception
     *
     * @return string The json response from the server
     */
    public function request($url, $method = 'get', $data = null, $curlOptions = array())
    {
        if (strtolower($method) === 'get')
        {
            $this->setGetfield($data);
        }
        else
        {
            $this->setPostfields($data);
        }

        return $this->buildTOAuth($url, $method)->performRequest(true, $curlOptions);
    }
}
