<?php
/*
 * toDo: move the twitter php code into a class
 */
?>
@extends('layout')

@section('content')


<div class="row">
    <div class="mainbar col-md-9">
        <div class="starter-template">
            <div class="pulse-logo">
                <img src="images/pulse.jpg" alt="Pulse Logo" title="Pulse" />
            </div>
        </div>
    </div>

    <div class="sidebar col-md-3">

        <div class="contact-container">
            <h2>Contact Us</h2>

            <p>Contact us to book a gig.</p>

            <a href="contact" class="button blue btn">Contact Us</a>
        </div>

        <div class="twitter-feed-container">
            <h2>Twitter Feed</h2>

<?php
function buildBaseString($baseURI, $method, $params) {
    $r = array();
    ksort($params);
    foreach($params as $key=>$value){
        $r[] = "$key=" . rawurlencode($value);
    }
    return $method."&" . rawurlencode($baseURI) . '&' . rawurlencode(implode('&', $r));
}

function buildAuthorizationHeader($oauth) {
    $r = 'Authorization: OAuth ';
    $values = array();
    foreach($oauth as $key=>$value)
        $values[] = "$key=\"" . rawurlencode($value) . "\"";
    $r .= implode(', ', $values);
    return $r;
}

$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";

$oauth_access_token = "2597045286-ZZ2areVYLy5EOA2icSz5W62FhCUA8w39Z5vOJBE";
$oauth_access_token_secret = "FmACLFXMSYs4l292qRkbWI9CRrZRUCv1J4QmgYVqKlVN4";
$consumer_key = "Jrsmg0H5hEADBIW76fGoWXNvW";
$consumer_secret = "IbJaXeRQTVEzeW1prkDfDFHC9Rj11hhNs3gleWUqHw5pboNw0z";

$oauth = array( 'oauth_consumer_key' => $consumer_key,
    'screen_name' => 'StarCraft',
    'count' => 3,
    'oauth_nonce' => time(),
    'oauth_signature_method' => 'HMAC-SHA1',
    'oauth_token' => $oauth_access_token,
    'oauth_timestamp' => time(),
    'oauth_version' => '1.0');

$base_info = buildBaseString($url, 'GET', $oauth);
$composite_key = rawurlencode($consumer_secret) . '&' . rawurlencode($oauth_access_token_secret);
$oauth_signature = base64_encode(hash_hmac('sha1', $base_info, $composite_key, true));
$oauth['oauth_signature'] = $oauth_signature;

// Make requests
$header = array(buildAuthorizationHeader($oauth), 'Expect:');
$options = array( CURLOPT_HTTPHEADER => $header,
    //CURLOPT_POSTFIELDS => $postfields,
    CURLOPT_HEADER => false,
    CURLOPT_URL => $url . '?screen_name=StarCraft&count=3',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_SSL_VERIFYPEER => false);

$feed = curl_init();
curl_setopt_array($feed, $options);
$json = curl_exec($feed);
curl_close($feed);

$twitter_data = json_decode($json);

$twitterObj = $twitter_data;

foreach($twitterObj as $t){
    echo '<div class="tweet">';
    echo $t->text;
    echo '</div>';
}

?>


        </div>

    </div>

    <div class="test col-md-12">
       <!--<pre>
           <?php //print_r($twitter_data); ?>
       </pre>
       -->

    </div>
</div>



@stop