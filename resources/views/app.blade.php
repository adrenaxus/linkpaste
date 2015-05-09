<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Linkpaste</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/custom.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Linkpaste</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">        
            <ul class="nav navbar-nav">
                <li class="dropdown">
                  <a aria-expanded="false" role="button" aria-haspopup="true" data-toggle="dropdown" class="dropdown-toggle" href="#" id="drop1">
                    Filters
                    <span class="caret"></span>
                  </a>
                  <ul aria-labelledby="drop1" role="menu" class="dropdown-menu" id="filters">
                    <li data-filter="*"><a href="#" tabindex="-1" role="menuitem">Show all</a></li>
                    <li data-filter=".metal"><a href="#" tabindex="-1" role="menuitem">Metal</a></li>
                    <li data-filter=".transition"><a href="#" tabindex="-1" role="menuitem">Transition</a></li>
                    <li data-filter=".alkali, .alkaline-earth"><a href="#" tabindex="-1" role="menuitem">alkali and alkaline-earth</a></li>
                    <li data-filter=":not(.transition)"><a href="#" tabindex="-1" role="menuitem">Not transition</a></li>
                    <li data-filter=".metal:not(.transition)"><a href="#" tabindex="-1" role="menuitem">Metal but not transition</a></li>
                    <li data-filter="numberGreaterThan50"><a href="#" tabindex="-1" role="menuitem">Nr. 50</a></li>
                    <li data-filter="ium"><a href="#" tabindex="-1" role="menuitem">name ends with &mdash;ium</a></li>                  
                  </ul>
                </li>
                <li class="dropdown">
                  <a aria-expanded="false" role="button" aria-haspopup="true" data-toggle="dropdown" class="dropdown-toggle" href="#" id="drop2">
                    Dropdown
                    <span class="caret"></span>
                  </a>
                  <ul aria-labelledby="drop2" role="menu" class="dropdown-menu">
                    <li role="presentation"><a href="" tabindex="-1" role="menuitem">Action</a></li>
                    <li role="presentation"><a href="" tabindex="-1" role="menuitem">Another action</a></li>
                    <li role="presentation"><a href="" tabindex="-1" role="menuitem">Something else here</a></li>
                    <li class="divider" role="presentation"></li>
                    <li role="presentation"><a href="" tabindex="-1" role="menuitem">Separated link</a></li>
                  </ul>
                </li>
            </ul>                                         

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Login</a></li>
						<li><a href="{{ url('/auth/register') }}">Register</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.0/isotope.pkgd.min.js"></script>
    <script src="{{ asset('/js/onload.js') }}"></script>
    
</body>
</html>
