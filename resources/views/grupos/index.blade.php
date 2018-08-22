@extends('../templates/principal')
@section('aba','welcome')

@section('content')


  @foreach ($grupos as $grupo)
      <div class="row-fluid">
          <div class="col-md-3">
              <div class="thumbnail">
                  <div class="topnav">
                      <a href="/grupos/{{ $grupo->id }}/edit"><i class="fas fa-edit"></i></a>
                      <a href="/grupos/create"><i class="fas fa-plus"></i></a>
                      <a href="/grupos/{{ $grupo->id }}">{{ $grupo->nome }}</a>
                  </div>
                  <div class="ellipsis">{{ $grupo->descricao }}</div>
              </div>
          </div>
      </div>
  @endforeach
@endsection
