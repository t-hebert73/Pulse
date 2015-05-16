@extends('layouts.layout')

@section('content')

<h1 class="page-title">Media</h1>

<div class="container">
    <div class="row">
        <div class="mainbar media col-md-8">

            <div class="content-container">

                <?php
                    //Get files from audio directory
                    $audioDir = "C:/xampp/htdocs/Pulse/public/audio";
                    $audioFiles = scandir($audioDir);

                    //Empty array to store mp3 files into from audio directory
                    $mp3Files = array();

                    //Starting index for uploaded songs
                    $mp3UploadedIndex = 1;

                    //Index for jplayer to identify each song, start at the count of uploaded songs plus 1
                    $mp3Index = count($songs) + 1;

                    //Loop through the audio files and store only mp3 files into the $mp3Files variable
                    foreach($audioFiles as $audioFile){

                        if(strpos($audioFile, '.mp3') !== false){
                            $mp3Files[] = $audioFile;
                        }
                    }

                    //Loop through uploaded songs and post to media page
                    if(!empty($songs)){
                        foreach($songs as $song){

                            echo AddUploadedSong($song->title, $song->file_name, $mp3UploadedIndex);

                            $mp3UploadedIndex++;
                        }
                    }

                    //In case we decide to add songs manually, add extra if statement for each manual file
                    if(!empty($mp3Files)){
                        foreach($mp3Files as $mp3){

                            if($mp3 == "Chameleon.mp3"){
                                AddSong("Chameleon - Herbie Hancock", $mp3, $mp3Index);
                            }
                            if($mp3 == "GetLucky.mp3"){
                                AddSong("Get Lucky - Daft Punk", $mp3, $mp3Index);
                            }
                            if($mp3 == "Josie.mp3"){
                                AddSong("Josie - Steely Dan", $mp3, $mp3Index);
                            }
                            if($mp3 == "SirDuke.mp3"){
                                AddSong("Sir Duke - Stevie Wonder", $mp3, $mp3Index);
                            }
                            if($mp3 == "Treasure.mp3"){
                                AddSong("Treasure - Bruno Mars", $mp3, $mp3Index);
                            }
                            $mp3Index++;
                        }
                    }

                    // If there are no uploaded songs, or no songs manually added
                    if(empty($songs) && empty($mp3Files)){
                        echo "There is no media available at this time.";
                    }


                ?>
            </div>
        </div>

        <div class="sidebar col-md-4">
            <div class="recording-info-container">
                <h2>Recording Information</h2>

                <div class="image-container">
                    <img src="/images/studio.jpg" />
                </div>

                <div class="content">
                    <p>These songs were recorded in the home studio of Marcus Gazzellone.</p>
                </div>

            </div>
        </div>
    </div>
</div>




@stop