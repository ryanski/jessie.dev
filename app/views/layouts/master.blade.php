<!DOCTYPE html>
<html>
<head>
	<title>I work</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="/css/jessie.css">
	<link href='https://fonts.googleapis.com/css?family=Amatic+SC:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
	@yield('top-script')

	@include('partials.navbar')


	@yield('content')


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script type="text/javascript" src="/js/lightbox.js"></script>
	@yield('bottom-script')

</body>
</html>