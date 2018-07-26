
	<div class="tweets">
	<?php
	require get_template_directory() . '/inc/twitteroauth/twitteroauth.php';

	// TWITTER OAUTH SETTINGS
	$twitteruser = "BetaDenUK";
	$notweets = 1;
	$consumerkey = "JXE165IUhfnzdItOFEAUVMics";
	$consumersecret = "rNGEJBIOjEFXg9dgse2SbZqr9o82RILuaXOZmVNsutHCfODy6y";
	$accesstoken = "2831854230-NZKYSfzi9f3xEGJhCeMIZtVUpjPt2Lg1d9GVxiU";
	$accesstokensecret = "b4656VO2DQGIaw8dPl1pvJhd3CiqpRM5DKZmgFYWww07T";

	// $post_object = get_field('show_selector');
	// if( $post_object ): 
	// 	// override $post
	// 	$post = $post_object;
	// 	setup_postdata( $post ); 
	// 	$search_tag = get_field('hash_tag');
	// wp_reset_postdata();
	// endif;

	function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
			$connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
		return $connection;
	}

	$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
	$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name= ".$twitteruser." &count=1");
	//$tweets = $connection->get("https://api.twitter.com/1.1/search/tweets.json?q=%23rampsonthemoon+OR+%23".$search_tag);

	// foreach ($tweets->statuses as $tweet):
	foreach ($tweets as $tweet): ?>
		<?php //print_r($tweet); 
			$tweet_time = $tweet->created_at;
			$tweet_time = strtotime($tweet_time);
			$now = time();
			$text = $tweet->text;
			$text = preg_replace('/(?:^|\s)#(\w+)/', ' <a href="https://twitter.com/hashtag/$1?src=hash">#$1</a>', $text);
			// $text now: Vivamus <a href="tag/tristique">tristique</a> non elit eu iaculis;
		?>
		<div class="tweet" data-time="<?php echo $tweet_time; ?>">
			<p><?php echo $text; ?></p>
			<p class="date">Posted <?php echo ShowDate($tweet_time); ?>. <a href="https://twitter.com/BetaDenUK" target="_blank" rel="noopener" title="follow us on twitter">Follow us on Twitter</a></p>
		</div>
		<?php //$tc++; ?>
	<?php endforeach;
	?>
	</div>