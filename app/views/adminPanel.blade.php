@extends ('adminlayout')

@section('content')

    <h1 class="page-title">Admin Panel</h1>

    <div class="content">
        <div class="container">
            <div class="row">

                <div class="mainbar col-md-8">
                    <p>admin stuff is done here so log in first.</p>

                    <?php

                    $password = '123';
                    $username = 'admin';

                    $array = array("user"=>$username,"password"=>$password);
                    pr($array);
                    if (Auth::attempt($array))
                    {
                        echo 'success atempt';
                        //return Redirect::intended('adminPanel');
                    }else{
                        echo 'failed attempt';
                    }





                    $results = DB::select("select * from users", array(1));
                    pr($results);


                    //$ttt = $users->getAuthPassword();
                    //pr($ttt);

                        //dd($array);

                    ?>
                </div>


            </div>
        </div>
    </div>

@stop