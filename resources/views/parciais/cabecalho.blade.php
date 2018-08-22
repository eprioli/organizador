<!DOCTYPE html>
<html>
  <head>
	 <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
	 <title>@yield('aba')</title>
  	 {{ Html::style('css/bootstrap.min.css') }}
	 {{ Html::style('css/bootstrap-theme.min.css') }}
     {{ Html::style('css/fontawesome-all.min.css') }}
     {{ Html::style('css/master.css') }}
     @yield('stylesheets')

  </head>
  <body>
      <div class="topnav">
       <a class="active" href="/">Home</a>
       <a href="#news">News</a>
       <a href="#contact">Contact</a>
       <a href="#about">About</a>
      </div>
