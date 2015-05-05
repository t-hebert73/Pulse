<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 4/29/15
 * Time: 9:48 PM
 */
?>
@extends ('layouts/adminLayout')
@section('content')

<h1 class="page-title">Song Panel</h1>

<div class="content">
    <div class="container">
        <div class="row">
            <div class="mainbar col-md-12">
                @if(Session::has('message'))
                    <div class="alert alert-info">{{ Session::get('message') }}</div>
                @endif

                <?php if(!$songs->isEmpty()){ ?>

                    <div class="panel panel-primary">
                        <div class="panel-heading">All Songs</div>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Song Title</th>
                                    <th>File Name</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach($songs as $song){ ?>
                                    <tr>
                                        <td><?php echo $song->id; ?></td>
                                        <td><?php echo $song->title; ?></td>
                                        <td><?php echo $song->file_name; ?></td>
                                        <td>
                                            <div style="display: inline-block">
                                                {{ Form::open(array('url' => 'songs/' . $song->id)) }}
                                                {{ Form::hidden('_method', 'DELETE') }}
                                                {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                                                {{ Form::close() }}
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                <?php } else{
                    echo 'No songs man =(';
                }?>
            </div>
        </div>
    </div>
</div>

