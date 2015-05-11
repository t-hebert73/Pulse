@extends ('layouts/adminLayout')

@section('content')

    <h1 class="page-title">Photos Panel</h1>

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
                        <div class="panel-heading">
                            <div class="left heading">All Photos</div>
                            <div class="right"><a class="btn btn-success" href="/photos/create">Add Photo</a></div>
                            <div class="clear"></div>
                        </div>

                        <table class="table">
                            <thead>
                            <tr>
                                <!--why the fuck did i use tables-->
                                <th>#</th>
                                <th>Caption</th>
                                <th>Album</th>
                                <th>Thumbnail</th>
                                <th>Filename</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php
                            foreach($images as $image){
                            ?>
                            <tr>
                                <td><?php echo $image->id; ?></td>
                                <td><?php echo $image->caption; ?></td>
                                <td>Album</td>
                                <td>
                                    <div class="image-thumb">
                                        <?php
                                            echo PrintImage($image->id.'-modal','uploaded/'.$image->file_name,'uploaded/'.$image->file_name);
                                        //echo HTML::image('images/uploaded/'.$image->file_name)
                                        ?>
                                    </div>

                                </td>
                                <td><?php echo $image->file_name; ?></td>
                                <td>

                                    <div style="display: inline-block">
                                        {{ Form::open(array('url' => 'photos/' . $image->id)) }}
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
                        echo 'No photos man. You should <a href="photos/create"> add one</a>.';
                    }

                    ?>

                </div>

            </div>
        </div>
    </div>

@stop