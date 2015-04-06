@extends ('adminlayout')

@section('content')

<h1 class="page-title">Add An Image</h1>

<div class="content">
    <div class="container">
        <div class="row">
            <div class="mainbar col-md-4">
                <?php
                    //prepare the stickyness
                    if(isset($stickyForm)){
                        $name = $stickyForm['name'];
                    }else{
                        $name = '';
                    }

                ?>

                {{ Form::open(array('action' => 'ImageController@addImage', 'files'=>true)); }}


                <fieldset>

                    <div class="form-group">
                        <?php

                        echo Form::label('name', 'Image Name:');

                        echo Form::text('name', $name, array('class' => 'form-control'));

                        ?>

                    </div>

                    <div class="form-group">
                        <?php

                        echo Form::label('image', 'Image File:');

                        echo Form::file('image', array('class' => 'form-control'));

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