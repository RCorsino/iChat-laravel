<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	  <link rel="stylesheet" href="{{ URL::asset('http://localhost/iChat-laravel/resources/assets/css/bootstrap2.css') }}"/>
         <!-- FONTAWESOME STYLES-->
         <link rel="stylesheet" href="{{ URL::asset('http://localhost/iChat-laravel/resources/assets/css/font-awesome.css') }}"/>
         <link rel="stylesheet" href="{{ URL::asset('http://localhost/iChat-laravel/resources/assets/font-awesome/css/font-awesome.min.css') }}"/>
            <!-- CUSTOM STYLES-->
        <link rel="stylesheet" href="{{ URL::asset('http://localhost/iChat-laravel/resources/assets/css/custom.css') }}"/>
        <link rel="stylesheet" href="{{ URL::asset('http://localhost/iChat-laravels/resources/assets/css/custom-made.css') }}"/>
        <!-- Custom Fonts -->
        <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>

@if (Auth::guest())
	<nav class="navbar navbar-default navbar-custom">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="{{ url('/') }}">iChat</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					
						<li><a href="{{ url('/auth/login') }}">Login</a></li>
						<li><a href="{{ url('/auth/register') }}">Register</a></li>
						
					
					
				</ul>
			</div> 
		</div> 
	</nav>
@yield('guest')


@else
	<nav class="navbar navbar-default navbar-custom">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="{{ url('/') }}">iChat</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
							</ul>
						</li>
				</ul>
			</div> 
		</div> 
	</nav>		
@yield('content')				

@endif



	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>

</html>