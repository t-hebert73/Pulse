@extends('layouts.layout')
@section('content')

<h1 class="page-title">Contact Us</h1>

<div class="container">
    <div class="mainbar col-sm-8">
        <h2>Interested in booking us?</h2>
        <p>This form will send an email directly to us! If you are interested in booking a gig,
        or just have any questions related to the band, please feel free to reach out to us. We will
        contact you back as soon as possible!</p>
    </div>

    <div class="sidebar col-sm-4">
        {{ Form::open(array('url' => 'contact', 'id' => 'ajax')) }}

        <div class="name">
            {{ Form::label('name', '*Name: ') }}
            {{ Form::text('name', '') }}
            <div class='error-msg'><?php echo $errors->first('name');?></div>
        </div>

        <div class="email">
            {{ Form::label('email', '*Email: ') }}
            {{ Form::text('email', '') }}
            <div class="error-msg">
                <?php
                foreach($errors->get('email') as $message)
                {
                    echo $message;
                }
                ?>
            </div>

        </div>

        <div class="phone">
            {{ Form::label('phone', 'Phone: ') }}
            {{ Form::text('phone', '') }}
            <div class="error-msg"><?php echo $errors->first('phone'); ?></div>
        </div>

        <div class="message">
            {{ Form::label('msg', '*Message: ') }}
            {{ Form::textarea('msg', '') }}
            <div class="error-msg">
                <?php
                foreach($errors->get('msg') as $message)
                {
                    echo $message;
                }
                ?>
            </div>
        </div>

            {{ Form::submit('Submit', array('class' => 'btn btn-large btn-primary')) }}
            @if(Session::has('success'))
            <div class="alert-box success">
                <h2 class="success-message">{{ Session::get('success') }} <span class="close-msg">x</span></h2>
            </div>
            @endif
        {{ Form::close() }}
    </div>
</div>

@stop

