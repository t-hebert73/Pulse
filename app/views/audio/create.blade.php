@extends ('layouts/adminLayout')

@section('content')

<h1 class="page-title">Add a Song</h1>

<div class="content">
    <div class="container">
        <div class="row">
            <div class="mainbar col-md-4">

                {{ HTML::ul($errors->all()) }}

                {{ Form::open(array('url' => 'audio/', 'files' => true)); }}

                <fieldset>

                    <div class="form-group">
                        <?php
                        echo Form::label('audio', 'Song:');

                        echo Form::file('audio', Input::old('audio'), array('class' => 'form-control'));
                        ?>
                    </div>

                    <div class="submission">
                        {{ Form::submit('Add Song File', array('class' => 'btn btn-default blue button')); }}
                    </div>

                </fieldset>

                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>