<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 ielt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
	<!--<![endif]-->
	<head>
		<meta charset="utf-8" />
    	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
   		<meta name="description" content="" />
    	<meta name="author" content="" />
		<title>XervDock - Test drive Docker Images on Amazon AWS</title>
		
		<link rel="stylesheet" type="text/css" href="styles.css" />
		
		<link rel="stylesheet" type="text/css" href="/zocial/zocial.css" />
		<!-- Latest compiled and minified CSS -->
		<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.2.0/flatly/bootstrap.min.css" rel="stylesheet">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<!-- GOOGLE FONT -->
    	<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
		
		
    	
		<style type="text/css">
			.zocial{
				width: 220px;
				margin-bottom: 20px;
			}
			
			.zocial a:hover{
				text-decoration:none;
				margin-bottom: 20px;
			}
		</style>

	</head>
	<body>
		<div class="container">
			<section id="content">
				@if($errors->has())
				<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert">
						×
					</button>
					@foreach ($errors->all() as $error)
					<li>
						{{ $error }}
					</li>
					@endforeach
				</div>
				@endif
				
				@if(Session::has('error_msg'))
				<div class="alert alert-danger">{{Session::get('error_msg')}}</div>
				@endif
				
				@if(Session::has('success_msg'))
				<div class="alert alert-success">{{Session::get('success_msg')}}</div>
				@endif
				
				@yield('content')
			</section>
		</div>
		<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</body>
</html>