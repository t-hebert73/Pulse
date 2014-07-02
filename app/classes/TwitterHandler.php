<?php
/**
 * Created by PhpStorm.
 * User: Trevor
 * Date: 01/07/14
 * Time: 11:24 PM
 *
 * This class makes a connection to the twitter api (v1.1) and allows you to grab tweets
 *
 * todo: grab authentication tokens from database
 * todo: break up tasks more logically
 * todo: allow more flexable options (ie. grab a specified users tweets, or profiles)
 *
 */

class TwitterHandler {

    //these should probably be grabbed from DB lol
    private $url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
    private $oauth_access_token = "2597045286-ZZ2areVYLy5EOA2icSz5W62FhCUA8w39Z5vOJBE";
    private $oauth_access_token_secret = "FmACLFXMSYs4l292qRkbWI9CRrZRUCv1J4QmgYVqKlVN4";
    private $consumer_key = "Jrsmg0H5hEADBIW76fGoWXNvW";
    private $consumer_secret = "IbJaXeRQTVEzeW1prkDfDFHC9Rj11hhNs3gleWUqHw5pboNw0z";
    private $oauth;

    public function prepareConnection(){

        $this->oauth = array( 'oauth_consumer_key' => $this->consumer_key,
            'screen_name' => 'StarCraft',
            'count' => 3,
            'oauth_nonce' => time(),
            'oauth_signature_method' => 'HMAC-SHA1',
            'oauth_token' => $this->oauth_access_token,
            'oauth_timestamp' => time(),
            'oauth_version' => '1.0');

        $base_info = $this->buildBaseString($this->url, 'GET', $this->oauth);
        $composite_key = rawurlencode($this->consumer_secret) . '&' . rawurlencode($this->oauth_access_token_secret);
        $oauth_signature = base64_encode(hash_hmac('sha1', $base_info, $composite_key, true));
        $this->oauth['oauth_signature'] = $oauth_signature;

    }

    public function getTweets(){

        $this->prepareConnection();
        // Make requests
        $header = array($this->buildAuthorizationHeader($this->oauth), 'Expect:');
        $options = array( CURLOPT_HTTPHEADER => $header,
            //CURLOPT_POSTFIELDS => $postfields,
            CURLOPT_HEADER => false,
            CURLOPT_URL => $this->url . '?screen_name=StarCraft&count=3',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false);

        $feed = curl_init();
        curl_setopt_array($feed, $options);
        $json = curl_exec($feed);
        curl_close($feed);

        return $twitter_data = json_decode($json);
    }

    public function buildBaseString($baseURI, $method, $params) {
        $r = array();
        ksort($params);
        foreach($params as $key=>$value){
            $r[] = "$key=" . rawurlencode($value);
        }
        return $method."&" . rawurlencode($baseURI) . '&' . rawurlencode(implode('&', $r));
    }

    public function buildAuthorizationHeader($oauth) {
        $r = 'Authorization: OAuth ';
        $values = array();
        foreach($oauth as $key=>$value)
            $values[] = "$key=\"" . rawurlencode($value) . "\"";
        $r .= implode(', ', $values);
        return $r;
    }
}