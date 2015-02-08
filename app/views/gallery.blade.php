<?php

function PrintImage($target, $srcThumb, $srcFull){
    echo "<div class='img-box'>";

    echo "<a href='#' data-toggle='modal' data-target='#".$target."'>";
        echo "<img src='".$srcThumb."'>";
    echo "</a>";

    echo "<div class='modal fade' id='".$target."' tabindex='-1' role='dialog' aria-labelledby='basicModal' aria-hidden='true'>";
        echo "<div class='modal-dialog'>
                    <div class='modal-content'>
                        <div class='modal-header'>
                            <h4 class='modal-title' id='myModalLabel'>Pulse @ Mahtey, January 30/2015</h4>
                        </div>
                        <div class='modal-body'>
                            <img src='".$srcFull."'>
                        </div>
                        <div class='modal-footer'>
                            <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                        </div>
                    </div>
                </div>";
        echo "</div>";
    echo "</div>";
}

?>

@extends('layout')

@section('content')


<h1 class="page-title">Gallery</h1>

<div class="container">
    <div class="row">
        <div class="mainbar">
            <div class="gallery-container">

                <?php
                    PrintImage("img1", "../../images/mahteyjan30/thumbs/img1-thumb.jpg", "../../images/mahteyjan30/img1.jpg");
                    PrintImage("img2", "../../images/mahteyjan30/thumbs/img2-thumb.jpg", "../../images/mahteyjan30/img2.jpg");
                    PrintImage("img3", "../../images/mahteyjan30/thumbs/img3-thumb.jpg", "../../images/mahteyjan30/img3.jpg");
                    PrintImage("img4", "../../images/mahteyjan30/thumbs/img4-thumb.jpg", "../../images/mahteyjan30/img4.jpg");
                ?>

                <div class="clear"></div>

            </div>
        </div>
    </div>
</div>

@stop