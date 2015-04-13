@extends('layout')

@section('content')


<h1 class="page-title">Gallery</h1>

<div class="container">
    <div class="row">
        <div class="mainbar">
            <div class="gallery-container">

                <?php
                    echo PrintImage("img1", "../../images/mahteyjan30/thumbs/img1-thumb.jpg", "../../images/mahteyjan30/img1.jpg");
                    echo PrintImage("img2", "../../images/mahteyjan30/thumbs/img2-thumb.jpg", "../../images/mahteyjan30/img2.jpg");
                    echo PrintImage("img3", "../../images/mahteyjan30/thumbs/img3-thumb.jpg", "../../images/mahteyjan30/img3.jpg");
                    echo PrintImage("img4", "../../images/mahteyjan30/thumbs/img4-thumb.jpg", "../../images/mahteyjan30/img4.jpg");
                ?>

                <div class="clear"></div>

            </div>
        </div>
    </div>
</div>

@stop