@extends ('layouts/adminLayout')

@section('content')

    <h1 class="page-title">Add A Show</h1>

    <div class="content">
        <div class="container">
            <div class="row">

                <div class="mainbar col-md-4">

                    <!-- if there are creation errors, they will show here -->
                    {{ HTML::ul($errors->all()) }}

                    {{ Form::open(array('url' => 'shows')); }}


                    <fieldset>
                        <div class="form-group">
                            <?php

                            echo Form::label('date', 'Date:');

                            echo Form::text('date', Input::old('date'), array('class' => 'form-control'));

                            ?>

                        </div>

                        <div class="form-group">
                            <?php

                            echo Form::label('time', 'Time:');

                            echo Form::text('time', Input::old('time'), array('class' => 'form-control'));

                            ?>
                        </div>

                        <div class="form-group">
                            <?php

                            echo Form::label('location', 'Location:');

                            echo Form::text('location', Input::old('location'), array('class' => 'form-control'));

                            ?>
                        </div>

                        <div>
                            {{ Form::submit('Add Show', array('class'=>'btn btn-default blue button')); }}
                        </div>
                    </fieldset>

                    {{ Form::close() }}

                </div>


            </div>
        </div>
    </div>

@stop