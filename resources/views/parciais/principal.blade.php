@include('parciais/cabecalho')

<div class="container-fluid">
  <div class="row">
    <div class="jumbotron">
      <h2>@yield('titulo')</h2>
    </div>
    <div class="col-sm-3" id="coluna">
      <h3>@yield('col_titulo', 'Grupos')</h3>
      <p>@yield('coluna')</p>
    </div>
    <div class="col-sm-9" id="conteudo">
      <h3>@yield('con_titulo')</h3>
      <div class="container-fluid">
        <div class="row flex">
          @yield('content')
        </div>
      </div>
    </div>
  </div>
</div>

@include('parciais/rodape')
