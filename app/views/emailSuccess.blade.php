@extends('layout')
@section('content')

<h2
    class="page-title">Your email has been sent successfully. You are being redirected
</h2>

<?php
header('Refresh: 3; URL=/');
?>

@stop