@extends('layout')

@section('content')
<div class="topbar">
    <div class="container">
        <!-- Place somewhere in the <body> of your page -->
        <div class="flexslider">
            <ul class="slides">
                <li>
                    <a href="media">
                        <div class="image">
                            <img src="images/studio.jpg" />
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
                    <a href="contact">
                        <div class="image">
                            <img src="images/pulse.jpg" />
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
<div class="container">

<div class="row">

    <div class="mainbar col-md-12">
        <div class="main-content">
            <div class="pulse-logo">
                <img src="images/pulse.jpg" alt="Pulse Logo" title="Pulse" />
            </div>

            <p>Welcome to the Pulse band website. We are a mostly mowntown cover band that plays music good. You can listen to it, yes yes, so listen. Why was the band playing music? because it was good. aw yah. </p>
            <p>We can play 4 sets of 15 songs and provide entertainment. We play in bars and for weddings too. We have all equipment necessary to play. Book now!</p>
        </div>
    </div>

    <!--<div class="sidebar col-md-4">

        <div class="twitter-feed-container">
            <a class="twitter-timeline" height="320" href="https://twitter.com/StarCraft" data-theme="dark" data-widget-id="487770098212421633">Tweets by @StarCraft</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>



        </div>




    </div>-->


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