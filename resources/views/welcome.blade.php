@extends('parciais/principal')
@section('aba','welcome')

@section('titulo')
  Organizador
@endsection

@section('coluna')
  @foreach ($grupos as $grupo)
    <p>{{ $grupo->nome }}</p>
  @endforeach
@endsection

@section('content')
  @foreach ($grupos as $grupo)
    <div class="col-sm-3">
      {{$grupo->descricao}}<br>
    </div>
  @endforeach
@endsection
