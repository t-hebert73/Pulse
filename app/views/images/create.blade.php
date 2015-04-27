@extends ('layouts/adminLayout')

@section('content')

    <h1 class="page-title">Add A Photo</h1>

    <div class="content">
        <div class="container">
            <div class="row">

                <div class="mainbar col-md-4">

                    <!-- if there are creation errors, they will show here -->
                    {{ HTML::ul($errors->all()) }}

                    {{ Form::open(array('url' => 'photos/', 'files' => true)); }}


                    <fieldset>
                        <div class="form-group">
                            <?php

                            echo Form::label('caption', 'Caption:');

                            echo Form::text('caption', Input::old('caption'), array('class' => 'form-control'));

                            ?>

                        </div>

                        <div class="form-group">
                            <?php

                            echo Form::label('image', 'Image:');

                            echo Form::file('image', Input::old('image'), array('class' => 'form-control'));

                            ?>
                        </div>

                        <div>
                            {{ Form::submit('Add Image', array('class'=>'btn btn-default blue button')); }}
                        </div>
                    </fieldset>

                    {{ Form::close() }}

                </div>


            </div>
        </div>
    </div>
