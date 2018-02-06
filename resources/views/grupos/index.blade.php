@extends('/parciais/principal')
@section('aba','welcome')

@section('titulo')
  Organizador
@endsection

@section('coluna')
  @foreach ($grupos as $grupo)
    <p><a href="/grupos/{{ $grupo->id }}">{{ $grupo->nome }}</a></p>
  @endforeach
@endsection

@section('content')
  @foreach ($grupos as $grupo)
    <div class="col-sm-3">
      {{$grupo->descricao}}<br>
    </div>
  @endforeach
@endsection
