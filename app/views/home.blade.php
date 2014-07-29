@extends('layout')

@section('content')
<h1 class="page-title">Welcome To Pulse Band</h1>
<div class="container">

<div class="row">

    <div class="mainbar col-md-8">
        <div class="main-content">
            <div class="pulse-logo">
                <img src="images/pulse.jpg" alt="Pulse Logo" title="Pulse" />
            </div>

            <p>Welcome to the Pulse band website. We are a mostly mowntown cover band that plays music good. You can listen to it, yes yes, so listen. Why was the band playing music? because it was good. aw yah. </p>
            <p>We can play 4 sets of 15 songs and provide entertainment. We play in bars and for weddings too. We have all equipment necessary to play. Book now!</p>
        </div>
    </div>

    <div class="sidebar col-md-4">

        <div class="twitter-feed-container">
            <a class="twitter-timeline" height="320" href="https://twitter.com/StarCraft" data-theme="dark" data-widget-id="487770098212421633">Tweets by @StarCraft</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>



        </div>




    </div>


</div>
</div>

<div class="topbar">
    <div class="container">
        <!-- Place somewhere in the <body> of your page -->
        <div class="flexslider">
            <ul class="slides">
                <li>
                    <div class="image">
                        <img src="images/placeholder2.jpg" />
                    </div>
                    <div class="promo-container">
                        <div class="content">
                            <h1 class="promo-title">Check Out The Newly Added Songs!</h1>
                            <p class="promo">Pulse has recorded 3 new cover songs so head over to the media page to listen!</p>

                            <div class="clear"></div>


                        </div>
                    </div>

                    <div class="clear"></div>
                </li>
                <li>
                    <div class="image">
                        <img src="images/placeholder1.jpg" />
                    </div>
                    <div class="promo-container">
                        <div class="content">
                            <h1 class="promo-title">Protoss Overpowered!</h1>
                            <p class="promo">Aidunt lectus massa ac lorem. Proin consequat tincidunt vehicula. Cras sagittis augue enim, eget aliquam urna eleifend et. Duis accumsan consectetur vulputate. Quisque vestibulum fermentum pulvinar.</p>

                            <div class="clear"></div>
                            <div class="venue-container">
                                <h4 class="heading">Venue:</h4>
                                <p class="venue">The Auditorium</p>
                            </div>
                            <div class="attendance-container">
                                <h4 class="heading">Attendance:</h4>
                                <p class="attendance">50,000 people</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>

                    <div class="clear"></div>
                </li>
                <li>
                    <div class="image">
                        <img src="images/placeholder3.png" />
                    </div>
                    <div class="promo-container">
                        <div class="content">
                            <h1 class="promo-title">Terran Tier 1 Units!</h1>
                            <p class="promo"> Pellentesque sagittis scelerisque lectus et vehicula. Sed porttitor at augue id dignissim. Nunc quis sollicitudin neque, in tincidunt metus. Cras eu pulvinar tellus, vel tempor mi.</p>

                            <div class="clear"></div>

                            <div class="venue-container">
                                <h4 class="heading">Venue:</h4>
                                <p class="venue">The Auditorium</p>
                            </div>
                            <div class="attendance-container">
                                <h4 class="heading">Attendance:</h4>
                                <p class="attendance">50,000 people</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>

                    <div class="clear"></div>
                </li>
            </ul>
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