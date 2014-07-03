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
                //catch the twitter object from controller
                $twitter = $objects;

                foreach($twitter as $tweet){
                    echo '<div class="tweet">';
                    echo $tweet->text;
                    echo '</div>';
                }

            ?>
        </div>

    </div>

    <div class="test col-md-12">
       <!--<pre>
           <?php print_r($twitter); ?>
       </pre>
       -->


    </div>
</div>



@stop