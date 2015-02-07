<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 2/7/15
 * Time: 12:56 PM
 */




?>

@extends('layout')

@section('content')


<h1 class="page-title">Gallery</h1>

<div class="container">
    <div class="row">
        <div class="mainbar">
            <div class="gallery-container">
                <!--
                <div class="col-md-2 img-box""></div>
                <div class="col-md-2 img-box""></div>
                <div class="col-md-2 img-box""></div>
                <div class="col-md-2 img-box""></div>
                <div class="col-md-2 img-box""></div>
                -->
                <a href="#" data-toggle="modal" data-target="#basicModal">Click to open Modal</a>
                <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">The Band</h4>
                            </div>
                            <div class="modal-body">
                                <img src="../../images/band/marcus.JPG">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>

@stop