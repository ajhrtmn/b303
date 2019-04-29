<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Business303</title>

		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,700" rel="stylesheet">

		{{-- Style --}}
		<link rel="stylesheet" href="/css/app.css">


	</head>
	<body>

		<div id='app' class="">
				<header>   @include('layouts.header')   </header>
				<main>   @include('layouts.content')   </main>
				<footer class="py-5 bg-color-bbd-yellow">  @include('layouts.footer')   </footer>
		</div>

		<script src="/js/app.js"></script>
	</body>
</html>
