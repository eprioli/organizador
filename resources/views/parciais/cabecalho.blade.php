<!DOCTYPE html>
<html>
  <head>
	   <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
	   <title>@yield('aba')</title>
  	 {{ Html::style('css/bootstrap.min.css') }}
	   {{ Html::style('css/bootstrap-theme.min.css') }}
     {{ Html::style('css/fontawesome-all.min.css') }}
     {{-- <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"> --}}
     {{ Html::style('css/master.css') }}
     @yield('stylesheets')

  </head>
  <body>
