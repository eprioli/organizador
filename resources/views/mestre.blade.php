@extends('/parciais/principal')
@section('aba','welcome')

@section('titulo')
  Organizador
@endsection

@section('coluna')
  @foreach ($grupos as $grupo)
    <div class="botao"><a href="/grupos/{{ $grupo->id }}">{{ $grupo->nome }}</a></div>
  @endforeach
@endsection

@section('content')
  @if (true)
    <img src="/imagens/amsterdam_{{ rand(1,3) }}.jpg" with="100%" width="100%" alt="Eu moro em Amsterdam">
  @else
    @foreach ($grupos as $grupo)
      <div class="col-sm-3">
        {{$grupo->descricao}}<br>
      </div>
    @endforeach
  @endif
@endsection
