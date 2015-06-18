<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Backend</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.0/css/bootstrap-toggle.min.css" rel="stylesheet">
	

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<style>
	.ios-container{
		height: 700px;
		width: 410px;
		background-color: #fff;
		margin-top: 50px;
		margin-left: 50px;
		overflow: scroll;
	}
	body{
		background-color: black;
	}
	h1,h2,h3,h4,h5{
		margin: 0;
		padding: 0;
	}

	.block-heading{
		padding-top: 10px;
		padding-bottom: 10px;
	}
	.grey-bg{
		background-color: #e7e7e7;
	}
	.green-bg{
		background-color: #A9E4AE;
	}
	.red-bg{
		background-color: #d9534f;
	}
	.border-bottom{
		border-bottom: 1px solid #e7e7e7;
	}
	.light-grey{
		color:#818181;
	}
	.big{
		font-size: 18px;
	}
	.navbar{
		margin: 0px;
	}
	a, a:hover{
		color:#333333;
	}
	.extra-details{
		font-size: 11px;
		margin-top: 1px;
		display: block;
		line-height: 0
	}
	.special-block{
		height: 48px;
	}

	</style>
</head>
<body>
	<div class="row">
		<div class="ios-container">
			@section('navbar')
			
				@show

			@yield('content')

		</div>
	</div>
	<br>
	<div class="row" style="background-color: #fff">
		<div class="col-md-12" style="padding: 15px 50px">
			@section('explanation')

	    	@show
    	</div>
	</div>

	


	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.0/js/bootstrap-toggle.min.js"></script>
</body>
</html>
