@extends('../parciais/principal')
@section('aba','welcome')

@section('titulo')
  <a href = "/" class = "btn btn-success btn-lg" role = "button">
    Organizador home page
  </a>
@endsection


@section('coluna')

@endsection



@section('foto')

@endsection


@section('content')
<h1>Criar um novo produto</h1>
{{Form::open(['action' => 'GrupoController@Store'])}}
{{Form::close()}}
@endsection
