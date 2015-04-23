@extends ('layouts/adminLayout')

@section('content')

    <h1 class="page-title">Images Panel</h1>

    <div class="content">
        <div class="container">
            <div class="row">

                <div class="mainbar col-md-12">

                    <!-- will be used to show any messages -->
                    @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                    @endif

                    <?php

                    if(!$images->isEmpty()){
                    ?>
                    <div class="panel panel-primary">
                        <div class="panel-heading">All Images</div>

                        <table class="table">
                            <thead>
                            <tr>
                                <!--why the fuck did i use tables-->
                                <th>#</th>
                                <th>Caption</th>
                                <th>Thumbnail</th>
                                <th>Filename</th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php
                            foreach($images as $image){
                            ?>
                            <tr>
                                <td><?php echo $image->id; ?></td>
                                <td><?php echo $image->caption; ?></td>
                                <td>
                                    <div class="image-thumb">
                                        <?php echo HTML::image('images/uploaded/'.$image->file_name) ?>
                                    </div>

                                </td>
                                <td><?php echo $image->file_name; ?></td>
                                <td>
                                    <div style="display: inline-block">
                                        <a class="btn btn-success" href="/shows/<?php echo $image->id; ?>/edit">Edit</a>
                                    </div>

                                    <div style="display: inline-block">
                                        {{ Form::open(array('url' => 'images/' . $image->id)) }}
                                        {{ Form::hidden('_method', 'DELETE') }}
                                        {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                                        {{ Form::close() }}
                                    </div>

                                </td>
                            </tr>


                            <?php
                            }
                            ?>
                            </tbody>


                        </table>
                    </div>
                    <?php
                    }else{
                        echo 'No images man.';
                    }

                    ?>

                </div>

            </div>
        </div>
    </div>

@stop