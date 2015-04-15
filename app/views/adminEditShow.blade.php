@extends ('adminlayout')

@section('content')

    <h1 class="page-title">Edit A Show</h1>

    <div class="content">
        <div class="container">
            <div class="row">

                <div class="mainbar col-md-4">

                    <?php

                        $date = $show->date;
                        $time = $show->time;
                        $location = $show->location;
                    ?>


                    {{ Form::model($show, array('route' => array('shows.update', $show->id), 'method' => 'PUT')) }}


                    <fieldset>
                        <div class="form-group">
                            <?php

                            echo Form::label('date', 'Date:');

                            echo Form::text('date', $date, array('class' => 'form-control'));

                            ?>

                        </div>

                        <div class="form-group">
                            <?php

                            echo Form::label('time', 'Time:');

                            echo Form::text('time', $time, array('class' => 'form-control'));

                            ?>
                        </div>

                        <div class="form-group">
                            <?php

                            echo Form::label('location', 'Location:');

                            echo Form::text('location', $location, array('class' => 'form-control'));

                            ?>
                        </div>

                        <div>
                            {{ Form::submit('Update Show', array('class'=>'btn btn-default blue button')); }}
                        </div>
                    </fieldset>

                    {{ Form::close() }}

                </div>


            </div>
        </div>
    </div>

@stop