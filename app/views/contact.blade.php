@extends('layout')

@section('content')

<div class="container">
<div class="starter-template">

    <h1>Contact Us</h1>

    <p>Try and send the form, I dare you.</p>

    <form role="form" class="contact form-horizontal">
        <div class="form-group">
            <label>Name: </label>
            <input type="text" class="form-control" placeholder="Name">

        </div>
        <div class="form-group">
            <label>Comments:</label>
            <textarea class="form-control" rows="3"></textarea>
        </div>

    </form>
</div>
</div>

@stop