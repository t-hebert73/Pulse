@extends ('layout')
@section('content')

<h1 class="page-title">The Band</h1>

<div class="content">
    <div class="container">
        <div class="mainbar spacing">
            <div class="row">
                <!-- Patrick Shea's Bio -->
                <div class="bio col-md-4" style="background-color: #CCE2FF; float:left">
                    <a href="#openModalPat">Patrick Shea</a>
                    <div id="openModalPat" class="modalDialog">
                        <div>
                            <a href="#close" title="Close" class="close">X</a>
                            <h3>Patrick Shea</h3>
                            <p>Lead Vocals/Keyboard</p>
                            <p>Pat started playing on a beat-up old classical guitar with steel strings just before
                                he started high school and it wasn’t long before he discovered he had an inherent love for
                                playing instruments.  He has played guitar and bass in both cover bands and originals but
                                he always found himself singing for the projects he was in.

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
                <div class="bio col-md-4" style="background-color: #566780; float:right">
                    <a href="#openModalMarcus">Marcus Gazzellone</a>
                    <div id="openModalMarcus" class="modalDialog">
                        <div>
                            <a href="#close" title="Close" class="close">X</a>
                            <h3>Marcus Gazzellone</h3>
                            <p>Drums</p>
                            <p>
                                Marcus started playing the drums at a young age but it really began during high school that
                                he was very serious about music and drums.He also has a passion with recording and mixing songs
                                in his own studio. He was always practising after school and than realize he should join bands.He
                                and max played in a couple of bands and realizing they had a good chemistry together. Marcus explores
                                genres such as to Funk, fusion, motown to progressive rock, reggae and experimental rock. Having played
                                for quite sometime, he has develop a ear how to approach music in certain ways. Either its his musical drum
                                parts or improvising the whole time while playing or practising. For Pulse marcus is responsible for keeping
                                the groove and the pocket going in a timely manner. He gives energy, chemistry, and unique personality to the
                                band and his chops that you would know its marcus gazzellone.
                            </p>
                        </div>
                    </div>
                </div>


            </div> <!-- Closing Row Div -->
            <div class="row">

                <!-- Max Saglimbeni's Bio -->
                <div class="bio col-md-4" style="background-color: #CCE2FF; float:left">
                    <a href="#openModalMax">Max Saglimbeni</a>

                    <div id="openModalMax" class="modalDialog">
                        <div>
                            <a href="#close" title="Close" class="close">X</a>
                            <h3>Max Saglimbeni</h3>
                            <p>Bass Guitar/Back-up Vocals</p>
                        </div>
                    </div>
                </div>

                <!-- Trevor Hebert's Bio -->
                <div class="bio col-md-4" style="background-color: #566780; float:right;">
                    <a href="#openModalTrevor">Trevor Hebert</a>

                    <div id="openModalTrevor" class="modalDialog">
                        <div>
                            <a href="#close" title="Close" class="close">X</a>
                            <h3>Trevor Hebert</h3>
                            <p>Lead Guitar</p>
                        </div>
                    </div>
                </div>
            </div>
         </div><!-- Closing Mainbar Div -->
    </div> <!-- Closing Container Div -->
</div>  <!-- Closing Content Div -->


@stop