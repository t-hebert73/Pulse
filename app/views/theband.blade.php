@extends ('layout')
@section('content')
<div class="the-band-page">

    <h1 class="page-title">The Band</h1>

    <div class="content">
        <div class="container">
            <div class="mainbar spacing">
                <div class="row marcus-pat-container">
                    <!-- Patrick Shea's Bio -->
                    <div class="patrick-container band-member">
                        <div class="bio">
                            <a href="#openModalPat"><img src="images/band/pat.jpg" /></a>
                        </div>
                        <h2 class="patrick-shea name">Patrick Shea</h2>
                        <div id="openModalPat" class="modalDialog">
                            <div>
                                <a href="#close" title="Close" class="close">X</a>
                                <h3>Patrick Shea</h3>
                                <p>Lead Vocals/Keyboard</p>
                                <p>Pat started playing on a beat-up old classical guitar with steel strings just before
                                    he started high school and it wasn’t long before he discovered he had an inherent love for
                                    playing instruments.  He has played guitar and bass in both cover bands and originals but
                                    he always found himself singing for the projects he was in.
                                </p>
                                <p>
                                    With the birth of Pulse, it was decided that the only way to make the music truly
                                    sound right was to integrate a keyboard and Pat is always up for learning a new instrument.
                                    Having never learned to play, he started with the songs on Pulse’s set and took to it right away.
                                    He may be new to the keyboard but his real contribution is in the way of vocals that can cut through
                                    with piercing high notes or slide along a low, slow groove.  Pat is one part of four that make Pulse
                                    such a unique and power sound.
                                </p>
                            </div>
                        </div>
                    </div>


                    <!-- Marcus Gazzellone's Bio -->
                    <div class="marcus-container band-member">
                        <div class="bio">
                            <a href="#openModalMarcus"><img src="images/band/marcus.jpg" /></a>
                        </div>
                        <h2 class="marcus-gazzellone name">Marcus Gazzellone</h2>
                        <div id="openModalMarcus" class="modalDialog">
                            <div>
                                <a href="#close" title="Close" class="close">X</a>
                                <h3>Marcus Gazzellone</h3>
                                <p>Drums</p>
                                <p>
                                    Marcus started playing the drums at a young age but it really began during high school that
                                    he was very serious about music and drums.He also has a passion with recording and mixing songs
                                    in his own studio. He was always practising after school and than realize he should join bands.He
                                    and max played in a couple of bands and realizing they had a good chemistry together.
                                </p>
                                <p>
                                    Marcus explores
                                    genres such as to Funk, fusion, motown to progressive rock, reggae and experimental rock. Having played
                                    for quite sometime, he has develop a ear how to approach music in certain ways. Either its his musical drum
                                    parts or improvising the whole time while playing or practising. For Pulse marcus is responsible for keeping
                                    the groove and the pocket going in a timely manner. He gives energy, chemistry, and unique personality to the
                                    band and his chops that you would know its marcus Gazzellone.
                                </p>
                            </div>
                        </div>

                    </div>



                </div> <!-- Closing Row Div -->
                <div class="row trevor-max-container">
                    <!-- Max Saglimbeni's Bio -->
                    <div class="max-container band-member">
                        <div class="bio">
                            <a href="#openModalMax"><img src="images/band/max.jpg" /></a>
                        </div>
                        <h2 class="max-saglimbeni name">Max Saglimbeni</h2>
                        <div id="openModalMax" class="modalDialog">
                            <div>
                                <a href="#close" title="Close" class="close">X</a>
                                <h3>Max Saglimbeni</h3>
                                <p>Bass Guitar/Back-up Vocals</p>
                                <p>
                                    Max was introduced to the bass guitar from his father, who had played bass throughout most of his life.
                                    Max began to play when he was old enough to grasp the instrument, and has been playing ever since.
                                    Max grew up playing a lot of progressive music. He was introduced to bands like Pink Floyd and Rush
                                    at a very young age and found the songs challenging, which allowed him to spend a lot of time on the
                                    instrument learning how to play.
                                <p>
                                    When he was old enough to start getting out to the bar scene, Max began to expand his musical interests.
                                    Watching bands perform Funk and Motown music was a big inspiration and motivated him to start
                                    playing music that got the crowd to move.
                                </p>
                                <p>
                                    Max has been playing with band members Marcus and Trevor throughout his entire life, and formed great
                                    chemistry with vocalist Patrick Shea shortly after being introduced.
                                </p>
                            </div>
                        </div>
                    </div>


                    <!-- Trevor Hebert's Bio -->
                    <div class="trevor-container band-member">
                        <div class="bio">
                            <a href="#openModalTrevor"><img src="images/band/trevor.jpg" /></a>
                        </div>
                        <h2 class="trevor-hebert name">Trevor Hebert</h2>
                        <div id="openModalTrevor" class="modalDialog">
                            <div>
                                <a href="#close" title="Close" class="close">X</a>
                                <h3>Trevor Hebert</h3>
                                <p>Lead Guitar</p>
                                <p>
                                    Trevor began to play Guitar when he was in grade 7. Listening to popular pop-punk groups like Blink 182 and Sum 41,
                                    Trevor’s interest in Guitar grew rapidly and has stuck with him ever since. As he grew older,
                                    his interests had shifted to Progressive Rock, and Classic Rock.
                                </p>
                                <p>
                                    Listening to groups like The Beatles, and Led Zeppelin, Trevor had developed his musical talents further,
                                    and has been on a steady incline ever since. Throughout his college experience, he has expanded his musical
                                    horizons into the Motown scene and the idea of being in a cover band was always of interest.
                                </p>
                                <p>
                                    Trevor has been playing with band members Max and Marcus since he began to play Guitar,
                                    and has formed great chemistry with vocalist Patrick Shea.
                                </p>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- Closing Mainbar Div -->
        </div> <!-- Closing Container Div -->
    </div>  <!-- Closing Content Div -->
</div>


@stop