@extends ('adminlayout')

@section('content')

    <h1 class="page-title">Shows Panel</h1>

    <div class="content">
        <div class="container">
            <div class="row">

                <div class="mainbar col-md-12">

                    <?php

                        $removeStatus = Session::get('removeStatus');

                        if(!empty($removeStatus)){
                            ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo $removeStatus; ?>
                                </div>
                            <?php
                        }

                    ?>

                    <?php
                        $shows = $data;

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
                                                <td><a class="btn btn-danger" href="/admin/shows/remove/<?php echo $show->id; ?>">Delete</a></td>
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