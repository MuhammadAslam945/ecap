
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="SmartUniversity" />
	<title>ECab - Taxi Admin Bootstrap 5 Material Design Dashboard Template</title>
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
	<link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('assets/css/material-design-iconic-font.min.css')}}">
	<!-- bootstrap -->
	<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
	<!-- style -->
	<link rel="stylesheet" href="{{asset('assets/css/extra_pages.css')}}">
	<!-- favicon -->
	<link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}" />
</head>

<body>
	{{$slot}}
	<!-- start js include path -->
	<script src="js/jquery.min.js"></script>
	<!-- bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/login.js"></script>
	<!-- end js include path -->
</body>

</html>