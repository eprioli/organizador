Framework(em html e usa o @yield('section'))
=============================================
{{-- cabecalho.blade.php --}}
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
{{-- fim_cabecalho --}}

{{-- principal.blade.php --}}
  @include('parciais/cabecalho')
  @yield('content');
  @include('parciais/rodape')
{{-- fim_principal --}}

{{-- rodape.blade.php --}}
    {{ Html::script('js/jquery-3.2.1.min.js') }}
    {{ Html::script('js/bootstrap.min.js') }}
    {{ Html::script('js/master.js') }}
    @yield('scripts')
  </body>
</html>
{{-- fim_rodape --}}
=================================================================
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('titulo')</title>
  </head>
  <body>
    @yield('content')
  </body>
</html>
=============================================
@extends('leiout.app')
@section('titulo', $produto->titulo)
@section('content')
  <h1>Produto {{ $produto->titulo }}</h1>
  <ul>
      <li>Referência: {{ $produto->referencia }}</li>
      <li>Preço: {{ $produto->preco }}</li>
      <li>Adicionado em: {{ $produto->created_at }}</li>
  </ul>
  <p>{{ $produto->descricao }}</p>
  <a href="javascript:history.go(-1)">Voltar</a>
@endsection
=============================================
