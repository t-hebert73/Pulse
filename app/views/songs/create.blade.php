@extends ('layouts/adminLayout')

@section('content')

<h1 class="page-title">Add a Song</h1>

<div class="content">
    <div class="container">
        <div class="row">
            <div class="mainbar col-md-4">

                {{ HTML::ul($errors->all()) }}

                {{ Form::open(array('url' => 'songs/', 'files' => true)); }}

                <fieldset>

                    <div class="form-group">
                        <?php
                        echo Form::label('title', 'Title:');

                        echo Form::text('title', Input::old('title'), array('class' => 'form-control'));
                        ?>
                    </div>

                    <div class="form-group">
                        <?php
                        echo Form::label('song', 'Song:');

                        echo Form::file('song', Input::old('song'), array('class' => 'form-control'));
                        ?>
                    </div>

                    <div class="submission">
                        {{ Form::submit('Add Song', array('class' => 'btn btn-default blue button')); }}
                    </div>

                </fieldset>

                {{ Form::close() }}

                @if(Session::has('success'))
                    <div class="alert-box success">
                        <h2>{{ Session::get('success') }}</h2>
                    </div>
                @endif

                @if(Session::has('failed'))
                <div class="alert-box failed">
                    <h2>{{ Session::get('failed') }}</h2>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>