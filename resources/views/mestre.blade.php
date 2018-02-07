@extends('/parciais/principal')
@section('aba','welcome')

@section('titulo')
  <a href = "/" class = "btn btn-success btn-lg" role = "button">
    Organizador home page
  </a>
@endsection

@section('coluna')
  @foreach ($grupos as $grupo)
    <div class="botao">
      <span class="edit">
        <a href = "/grupos/{{ $grupo->id }}/edit">
          <i class="fas fa-edit" aria-hidden="true"></i>
        </a>
      </span>
      <span>
        <a href="/grupos/{{ $grupo->id }}">{{ $grupo->nome }}</a>
      </span>
      <span class="delete">
        <a href="{{ route('grupos.destroy', $grupo) }}"> <i class="fas fa-trash" aria-hidden="true" class="btn btn-primary"></i></a>
        {{-- <a href = "/grupos/{{ $grupo->id }}" method="destroy">
          <i class="fas fa-trash" aria-hidden="true"></i>
        </a> --}}
      </span>
    </div>

  @endforeach
@endsection

@if((count($grupos) !== 0) && ($grupos->first()->grupo_id === 1))
  @section('foto')
    <div class="thumbnail">
      <img src="/imagens/amsterdam_{{ rand(0,9) }}.jpg"  alt="Eu moro em Amsterdam">
    </div>

  @endsection
@else
  @section('content')
    @foreach ($grupos as $grupo)
      <div class="col-sm-3">
        {{$grupo->descricao}}<br><br>
      </div>
    @endforeach
  @endsection
@endif
