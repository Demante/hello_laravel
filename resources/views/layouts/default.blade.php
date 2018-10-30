<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Sample App')  - Laravel 新手入门教程</title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	@include('layouts._header')
	<div class="container">
		<div class="col-mod-offset-1 col-md-10">
			@include('shared._messges')
			@yield('content')
			@include('layouts._footer')
		</div>
	</div>
</body>
</html>