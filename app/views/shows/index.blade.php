@extends ('adminLayout')

@section('content')

    <h1 class="page-title">Shows Panel</h1>

    <div class="content">
        <div class="container">
            <div class="row">

                <div class="mainbar col-md-12">

                    <!-- will be used to show any messages -->
                    @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                    @endif

                    <?php

                    if(!$shows->isEmpty()){
                    ?>
                    <div class="panel panel-primary">
                        <div class="panel-heading">All Shows</div>

                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Location</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php
                            foreach($shows as $show){
                            ?>
                            <tr>
                                <td><?php echo $show->id; ?></td>
                                <td><?php echo $show->location; ?></td>
                                <td><?php echo $show->date; ?></td>
                                <td><?php echo $show->time; ?></td>
                                <td>
                                    <div style="display: inline-block">
                                        <a class="btn btn-success" href="/shows/<?php echo $show->id; ?>/edit">Edit</a>
                                    </div>

                                    <div style="display: inline-block">
                                        {{ Form::open(array('url' => 'shows/' . $show->id)) }}
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
                        echo 'No shows man.';
                    }

                    ?>

                </div>

            </div>
        </div>
    </div>

@stop