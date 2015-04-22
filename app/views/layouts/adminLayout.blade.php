<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pulse Band Admin</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Google Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500,700italic,500italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="/css/main.css" rel="stylesheet">

    <!-- Flexslider -->
    <link rel="stylesheet" href="/css/vendor/flexslider/flexslider.css" type="text/css">

    <!-- jQuery -->
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <!-- datePicker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

    <!-- Custom -->
    <script type="text/javascript" src="/js/custom.js"></script>

    <?php
    //Get the current page name
    global $currentPage;
    $currentPage = basename($_SERVER['REQUEST_URI']);
    if($currentPage == ""){
        $currentPage = "home";
    }
    ?>

</head>
<!-- Body with page class -->
<body class="<?php echo $currentPage; ?>">

<header>
    <div class="navbar navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="/"><img class="logo" alt="Pulse Band Logo" title="Pulse New Niagara Band" src="/images/Pulse400x400.png" /></a>
            </div>
            <nav class="collapse navbar-collapse">
                <ul class="nav navbar-nav admin-nav">
                    <li>
                        <a href="/admin">Admin</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Shows <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/shows">List Shows</a></li>
                            <li class="divider"></li>
                            <li><a href="/shows/create">Add</a></li>
                        </ul>
                    </li>
                </ul>
            </nav><!--/.nav-collapse -->

        </div>
    </div>
</header>


    @yield('content')

<footer class="footer" role="contentinfo">
    <div class="container">
        <div class="secret-social-icons">
            <!--<div class="t icon" ></div>-->
            <div class="f icon" ><a href="https://www.facebook.com/pages/Pulse/1433601266925408" target="_blank" title="Pulse on Facebook"></a></div>
            <div class="y icon" ><a href="https://www.youtube.com/channel/UC1voaUJaImOZD51PF0yl6VA" target="_blank" title="Pulse on Youtube"></a></div>
        </div>
        Copyright <?php echo date('Y'); ?>
    </div>
</footer>

</body>


</html>