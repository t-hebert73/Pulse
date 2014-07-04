@extends('layout')

@section('content')

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
                            <h1 class="promo-title">What A Show!</h1>
                            <p class="promo">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris viverra semper lorem. Donec vel fringilla tellus. Suspendisse commodo eros id imperdiet volutpat. Quisque non diam interdum, suscipit turpis et, tincidunt leo. Pellentesque sagittis scelerisque lectus et vehicula. Sed porttitor at augue id dignissim. Nunc quis sollicitudin neque, in tincidunt metus. Cras eu pulvinar tellus, vel tempor mi.</p>

                            <div class="clear"></div>

                            <div class="venue-container">
                                <h4 class="heading">Venue:</h4>
                                <p class="venue">Molson Ampitheatre</p>
                            </div>
                            <div class="attendance-container">
                                <h4 class="heading">Attendance:</h4>
                                <p class="attendance">750,000 people</p>
                            </div>
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
                            <p class="promo">Curabitur malesuada purus ornare condimentum adipiscing. In tempor tristique mi non laoreet. Vestibulum ac dui consectetur, fermentum sapien et, ultricies sem. Etiam tortor mi, ullamcorper et nisi eu, sagittis convallis metus. Praesent rutrum, tellus ac viverra varius, diam dolor interdum turpis, aliquet tincidunt lectus massa ac lorem. Proin consequat tincidunt vehicula. Cras sagittis augue enim, eget aliquam urna eleifend et. Duis accumsan consectetur vulputate. Quisque vestibulum fermentum pulvinar.</p>

                            <p class="promo-foot">Mauris viverra semper lorem. Curabitur malesuada purus ornare condimentum adipiscing. In tempor tristique mi non laoreet. Mauris viverra semper lorem. Curabitur malesuada purus ornare condimentum adipiscing. In tempor tristique mi non laoreet.  </p>
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
                            <p class="promo">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris viverra semper lorem. Donec vel fringilla tellus. Suspendisse commodo eros id imperdiet volutpat. Quisque non diam interdum, suscipit turpis et, tincidunt leo. Pellentesque sagittis scelerisque lectus et vehicula. Sed porttitor at augue id dignissim. Nunc quis sollicitudin neque, in tincidunt metus. Cras eu pulvinar tellus, vel tempor mi.</p>

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

<div class="container">

<div class="row">
    <div class="mainbar col-md-8">
        <div class="starter-template">
            <div class="pulse-logo">
                <img src="images/pulse.jpg" alt="Pulse Logo" title="Pulse" />
            </div>
            <div class="main-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel tempus tellus. Quisque lobortis turpis nec commodo egestas. Aenean vestibulum leo vitae egestas aliquet. Donec sapien lorem, consectetur eget fermentum at, ornare et nibh. Sed congue ipsum a eleifend tempus. Cras id dolor velit. Ut nibh ipsum, malesuada non vehicula fringilla, rhoncus vel orci. Aliquam accumsan arcu quam, quis aliquam nunc aliquet ac. Vestibulum ullamcorper, augue sed posuere ultrices, metus lorem consectetur lectus, eu euismod enim diam a metus. Morbi ac turpis ac nibh vestibulum dictum vitae a dui.</p>
            </div>
        </div>
    </div>

    <div class="sidebar col-md-4">

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
</div>

<script type="text/javascript" charset="utf-8">
    $(window).load(function() {
            $('.flexslider').flexslider({
                animation: 'fade'
            });

    });
</script>

@stop