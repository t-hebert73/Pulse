@extends('layouts/layout')

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
                                <img alt="Pulse on stage" title="Pulse at Mahtay Cafe" src="images/bandshotmontys.jpg" />
                            </div>

                        </div>
                        <div class="promo-container">
                            <div class="content">
                                <h1 class="promo-title"> Show at Montys Gastropub</h1>
                                <p class="promo">Pulse has played an awesome show at Montys Gastropub located in St Catharines! Thanks everyone for coming out, more images and video to come!</p>

                                <div class="clear"></div>


                            </div>
                        </div>

                        <div class="clear"></div>
                    </a>
                </li>

                <li>
                    <a href="https://www.youtube.com/watch?v=vxkbU6E6XMI&feature=youtu.be" title="Pulse in the studio!" target="_blank">
                        <div class="image-container">
                            <div class="image">
                                <img alt="Pulse in the studio" title="Pulse in the studio" src="images/pulseyoutubethumb.png" />
                            </div>

                        </div>
                        <div class="promo-container">
                            <div class="content">
                                <h1 class="promo-title">Pulse Jamming in the Studio!</h1>
                                <p class="promo">Check out Pulse playing some songs in the studio!</p>

                                <div class="clear"></div>


                            </div>
                        </div>

                        <div class="clear"></div>
                    </a>
                </li>

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
            </ul>
        </div>
    </div>
</div>

<div class="container home">

<div class="row-fluid">

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

        <div class="shows">

            <div class="past-shows">


                <?php

                    $allShows = Show::all();
                    $upcomingShows = array();
                    $pastShows = array();

                    if(!$allShows->isEmpty()){
                        foreach($allShows as $show){
                            if(strtotime($show->date) > strtotime('now')){
                                $upcomingShows[] = $show;
                            }else{
                                $pastShows[] = $show;
                            }
                        }
                    }

                    if(!empty($upcomingShows)){ ?>
                        <h2>Upcoming Shows</h2>

                        <?php

                        foreach($upcomingShows as $show){
                            $date = date('l F jS, Y',strtotime($show->date));
                        ?>
                            <p class="show-date"><?php echo $date; ?></p>
                            <p class="show-location"><?php echo $show->location; ?> @ <span class="bold-text"><?php echo $show->time; ?></span></p>
                            <br>
                        <?php }
                    }

                    if(!empty($pastShows)){ ?>
                        <h2>Past Shows</h2>

                        <?php

                        foreach($pastShows as $show){
                            $date = date('l F jS, Y',strtotime($show->date));
                        ?>
                            <p class="show-date"><?php echo $date; ?></p>
                            <p class="show-location"><?php echo $show->location; ?> @ <span class="bold-text"><?php echo $show->time; ?></span></p>
                            <br>
                        <?php }
                    }
                ?>

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