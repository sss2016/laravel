<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<style>
	.container{
		margin-top:20%;
	}
</style>
<body>
	<div id="app"></div>
</body>
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</html>