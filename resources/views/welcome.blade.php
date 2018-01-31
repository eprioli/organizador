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
  amor da minha vida <br>
  amor da minha vida <br>
  amor da minha vida <br>
  amor da minha vida <br>
  amor da minha vida <br>
  <p>amor da minha vida</p>
  <p>amor da minha vida</p>
  <p>amor da minha vida</p>
  <p>amor da minha vida</p>
  <p>amor da minha vida</p>

@endsection
