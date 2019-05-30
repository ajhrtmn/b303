<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="has-background-primary">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>{{ config('app.name', 'Laravel') }}</title>

		<!-- Styles -->
		@include('layouts.styles')

	</head>

	<body>

		<div id="app" class="container-fluid" style="width: 100%; padding: 0rem;">

			<header>   @include('layouts.header')   </header>

			<main>   @yield('content')   </main>

			<footer>  @include('layouts.footer')   </footer>

		</div>

		<!-- Scripts -->
		@include('layouts.scripts')


	</body>

</html>
