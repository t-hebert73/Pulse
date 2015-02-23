@extends ('adminlayout')

@section('content')

    <h1 class="page-title">Add A Show</h1>

    <div class="content">
        <div class="container">
            <div class="row">

                <div class="mainbar col-md-4">

                    <?php

                        //grab data from controller
                        if(!empty($data)){
                            $formStatus = $data['formStatus'];
                            $formMessage = $data['formMessage'];
                            if(isset($data['addShowForm'])){
                                $stickyForm = $data['addShowForm'];
                            }

                        }

                        //prepare the stickyness
                        if(isset($stickyForm)){
                            $date = $stickyForm['date'];
                            $time = $stickyForm['time'];
                            $location = $stickyForm['location'];
                        }else{
                            $date = '';
                            $time = '';
                            $location = '';
                        }

                        //alert the pepow
                        if(!empty($formStatus)){
                            if($formStatus == 'success'){
                                ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo $formMessage; ?>
                                </div>
                                <?php
                            }
                            else{
                                ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $formMessage; ?>
                                </div>
                                <?php

                            }
                        }

                    ?>


                    {{ Form::open(array('action' => 'ShowsController@addShow')); }}


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
                            {{ Form::submit('Add Show', array('class'=>'btn btn-default blue button')); }}
                        </div>
                    </fieldset>

                    {{ Form::close() }}

                </div>


            </div>
        </div>
    </div>

@stop