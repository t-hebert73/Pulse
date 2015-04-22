@extends('layouts.layout')

@section('content')

    <h1 class="page-title">Login</h1>

        <div class="container">

            <div class="row">
                <div class="mainbar media col-md-12">

                    <div class="content-container">

                        <div class="login-form-container">
                            {{
                                Form::open(array('action' => 'LoginController@attemptLogin'));
                            }}

                            <fieldset>

                                <div class="form-group">
                                    {{ Form::label('username', 'Username'); }}

                                    {{ Form::text('username', '',  array('class'=>'form-control')); }}
                                </div>

                                <div class="form-group">
                                    {{ Form::label('password', 'Password'); }}
                                    {{ Form::password('password', array('class'=>'form-control')); }}
                                </div>

                                <div>
                                    {{ Form::submit('Login', array('class'=>'btn btn-default blue button')); }}
                                </div>

                            </fieldset>

                            {{
                                Form::close();
                            }}

                        </div>


                    </div>

                </div>

            </div>
        </div>




@stop