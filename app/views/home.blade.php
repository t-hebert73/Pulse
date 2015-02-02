@extends('layout')

@section('content')
<div class="topbar">
    <div class="container">
        <!-- Place somewhere in the <body> of your page -->
        <div class="flexslider">
            <ul class="slides">
                <li>
                    <a href="theband" title="About The Band">
                        <div class="image-container">
                            <div class="image">
                                <img alt="Pulse on stage" title="Pulse at Mahtay Cafe" src="images/pulseonstage.jpg" />
                            </div>

                        </div>
                        <div class="promo-container">
                            <div class="content">
                                <h1 class="promo-title">First Show! - Mahtay Cafe</h1>
                                <p class="promo">Pulse has played their first show at Mahtay Cafe located in St Catharines!</p>

                                <div class="clear"></div>


                            </div>
                        </div>

                        <div class="clear"></div>
                    </a>
                </li>
                <li>
                    <a href="media" title="Listen to Pulse">
                        <div class="image">
                            <img alt="Pulse Studio" title="Pulse Home Studio" src="images/studio.jpg" />
                        </div>
                        <div class="promo-container">
                            <div class="content">
                                <h1 class="promo-title">Check Out The Newly Added Songs</h1>
                                <p class="promo">Pulse has recorded 3 new cover songs so head over to the media page to listen!</p>

                                <div class="clear"></div>


                            </div>
                        </div>

                        <div class="clear"></div>
                    </a>
                </li>

                <li>
                    <a href="contact" title="Contact Pulse">
                        <div class="image">
                            <img alt="Pulse Band Logo" title="Pulse Niagara" src="images/pulse.jpg" />
                        </div>
                        <div class="promo-container">
                            <div class="content">
                                <h1 class="promo-title">Now Booking Gigs</h1>
                                <p class="promo"> Pulse is now looking to book gigs, so head over the to contact page to book now.</p>


                            </div>
                        </div>

                        <div class="clear"></div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="container home">

<div class="row">

    <div class="mainbar col-md-8">
        <div class="main-content">
            <div class="pulse-logo">
                <img src="images/pulse.jpg" alt="Pulse Logo" title="Pulse" />
            </div>

            <p>
                Welcome to the Pulse Band website. We're a fresh new band in the Niagara region looking to bring the Motown/Funk/Soul genres back in style.
                This website is still under development, more content soon to come.
            </p>

            <br>

            <strong><em>Follow us on <a target="_blank" href="https://www.facebook.com/pages/Pulse/1433601266925408" title="Pulse on Facebook">Facebook</a> and check out our media page
            for some recorded demos!</em></strong>
        </div>
    </div>

    <div class="sidebar col-md-4">

        <!--<div class="twitter-feed-container">
            <a class="twitter-timeline" height="320" href="https://twitter.com/StarCraft" data-theme="dark" data-widget-id="487770098212421633">Tweets by @StarCraft</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div>-->

        <div class="shows">

            <div class="past-shows">
                <h2>Past Shows</h2>

                <p class="show-date">Friday January 30th, 2015</p>
                <p class="show-location">Mahtay Cafe @ <span class="bold-text">8:00pm</span></p>

                <br>

                <p class="show-date">Sunday January 18th, 2015</p>
                <p class="show-location">Private Function @ <span class="bold-text">7:00pm</span></p>

                <br>

                <p class="show-date">Sunday December 14th, 2014</p>
                <p class="show-location">Mahtay Cafe @ <span class="bold-text">7:00pm</span></p>


            </div>

        </div>



    </div>


</div>
</div>

<script type="text/javascript" charset="utf-8">
    $(window).load(function() {
            $('.flexslider').flexslider({
                animation: 'fade',
                height: 150
            });

    });
</script>

@stop