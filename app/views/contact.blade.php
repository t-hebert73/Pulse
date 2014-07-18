@extends('layout')

@section('content')

<div class="container">
<div class="starter-template">

    <h3>Contact Us</h3>

    <table class="col-sm-6">
        <tr>
            <th>Have Any Questions?</th>
        </tr>
        <tr>
            <td>
                <br><br>
                You can fill out the form to the right and send a message directly to us! <br>
                If you would like to book a gig, ask questions, or any thing related to the band <br>
                we will get back to as soon as possible.
            </td>
        </tr>
        <tr>
            <td>
                <div class="pulse-logo">
                    <img src="images/pulse.jpg" alt="Pulse Logo" title="Pulse" />
                </div>
            </td>
        </tr>
    </table>

    {{ Form::open(array('url' => 'contact')) }}
    <table class="col-sm-6">
        <tr>
            <td>{{ Form::label('name', 'Name') }}</td>
            <td>{{ Form::text('name', ' ')   }} <?php echo $errors->first('name');?></td>
        </tr>
        <tr>
            <td>{{ Form::label('email', 'Email') }}</td>
            <td>{{ Form::text('email', ' ') }} <?php
                foreach($errors->get('email') as $message)
                {
                    echo $message;
                }
                ?></td>
        </tr>
        <tr>
            <td>{{ Form::label('msg', 'Message') }}</td>
            <td>{{ Form::textarea('msg', ' ') }} <?php
                    foreach($errors->get('msg') as $message)
                    {
                        echo $message;
                    }
                ?> </td>
        </tr>
        <tr>
            <td></td>
            <td>{{ Form::submit('Submit', array('class' => 'btn btn-large btn-primary')) }}</td>
        </tr>
    {{ Form::close() }}
    </table>
</div>
</div>

@stop

