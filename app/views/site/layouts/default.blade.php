<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>
			@section('title')
			Sell or buy used games
			@show
		</title>
		<meta name="keywords" content="your, awesome, keywords, here" />
		<meta name="author" content="Game Reuse" />
		<meta name="description" content="Game Reuse is a community of game lovers where you can sell or buy all the games" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- CSS
		================================================== -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:100,300,400' rel='stylesheet' type='text/css'>
        <!-- icon fonts -->
        <link type="text/css" rel="stylesheet" href="{{asset('assets/font-icons/custom-icons/css/custom-icons.css')}}">

        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{asset('assets/css/layout.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/colors.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/custom.css')}}">

		@section('styles')
		@show
		</style>

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
        <script src="{{ asset('assets/js/modernizr-2.6.1.min.js') }}"></script>


		<!-- Favicons
		================================================== -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" href="{{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}}">
		<link rel="shortcut icon" href="{{{ asset('assets/ico/favicon.png') }}}">
	</head>

    <body>
        <div id="globalWrapper">

            <!-- Header -->
            @include('site/layouts/header')
            <!-- ./ header -->

            <!-- ======================================= content ======================================= -->
            <section id="page">
                <!-- Notifications -->
                @include('notifications')
                <!-- ./ notifications -->

                <!-- Content -->
                @yield('content')
                <!-- ./ content -->
            </section>

            <!-- Footer -->
            @include('site/layouts/footer')
            <!-- ./ footer -->
        </div>

        @section('scripts')
            <!-- Javascripts
            ================================================== -->
            <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
            <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
            <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
            <!-- third party plugins  -->
            <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

            <!-- pop up -->
            <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/0.9.9/jquery.magnific-popup.min.js"></script>
            <!-- Custom  -->
            <script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>

            @yield('scripts')
        @show


        <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-58439950-1', 'auto');
        ga('send', 'pageview');
        </script>
	</body>
</html>
