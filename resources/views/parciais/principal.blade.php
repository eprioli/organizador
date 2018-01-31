@include('parciais/cabecalho')

<div class="container-fluid">
  <div class="row">
    <div class="jumbotron">
      <h2>@yield('titulo')</h2>
    </div>
    <div class="col-sm-3">
      <h2>Coluna esquerda</h2>
      <p>@yield('coluna')</p>
    </div>
    <div class="col-sm-9">
      <h2>Coluna direita</h2>
      <div class="container-fluid">
        <div class="row flex">
          @yield('content')
        </div>
      </div>
    </div>
  </div>
</div>

@include('parciais/rodape')
