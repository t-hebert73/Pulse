@extends('layout')

@section('content')

<div class="container">
<div class="starter-template">

    <h1 class="page-title">Contact Us</h1>

    {{ Form::open(array('url' => 'contact')) }}
    <table>
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

