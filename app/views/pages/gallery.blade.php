@extends('layouts.layout')

@section('content')

<h1 class="page-title">Gallery</h1>

<div class="container">
    <div class="row">
        <div class="mainbar">

            <?php
                $mahtayTitle = 'Pulse @ Mahtay, January 30/2015';
            ?>
            <h2><?php echo $mahtayTitle; ?></h2>
            <div class="gallery-container">

                <?php
                    echo PrintImage("m-img1", "mahteyjan30/thumbs/img1-thumb.jpg", "mahteyjan30/img1.jpg", $mahtayTitle);
                    echo PrintImage("m-img2", "mahteyjan30/thumbs/img2-thumb.jpg", "mahteyjan30/img2.jpg", $mahtayTitle);
                    echo PrintImage("m-img3", "mahteyjan30/thumbs/img3-thumb.jpg", "mahteyjan30/img3.jpg", $mahtayTitle);
                    echo PrintImage("m-img4", "mahteyjan30/thumbs/img4-thumb.jpg", "mahteyjan30/img4.jpg", $mahtayTitle);
                ?>

                <div class="clear"></div>

            </div>

                <?php
                    $ftTitle = "Pulse @ Fort Erie Race Track, July 21/2015";
                ?>

            <h2><?php echo $ftTitle; ?></h2>

            <div class="gallery-container">

                <?php
                    $folder = "forteriejul21/";
                    $thumbs = "thumbs/";
                    $imgName = "IMG_";
                    $suffix = ".jpg";

                for($i = 1; $i < 16; $i++){
                    $target = "f-IMG_" . $i;
                    $thumb = $folder . $thumbs . "IMG_" . $i . "-thumb" . $suffix;
                    $image = $folder . $imgName . $i . $suffix;
                    echo PrintImage($target, $thumb, $image, $ftTitle);
                }
                ?>

                <div class="clear"></div>

            </div>
        </div>
    </div>
</div>

@stop