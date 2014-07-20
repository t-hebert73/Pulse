<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pulse Band</title>

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

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

    <!-- Flexslider -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script src="../packages/jquery.flexslider.js"></script>

    <!-- jPlayer -->
    <link type="text/css" href="/css/vendor/jplayer/jplayer.blue.monday.css" rel="stylesheet" />
    <script type="text/javascript" src="/js/jplayer/jquery.jplayer.min.js"></script>

</head>
<body>

<div class="navbar navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="/"><img class="logo" src="images/placeholderlogo.png" /></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Home</a></li>
                <li><a href="theband">The Band</a></li>
                <!--<li><a href="shows">Shows</a></li>-->
                <li><a href="media">Media</a></li>
                <li><a href="contact">Contact</a></li>
            </ul>
        </div><!--/.nav-collapse -->

        <div class="contact-container">
            <div class="email">pulsebandinfo1@gmail.com</div>
            <a href="contact" class="button blue btn">Book A Gig</a>
        </div>
    </div>
</div>

    @yield('content')

<footer class="footer">
    <div class="container">
        Copyright <?php echo date('Y'); ?>
    </div>
</footer>

</body>


</html>