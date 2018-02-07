@include('parciais/cabecalho')

<div class="container-fluid">
  <div class="row">
    <div class="jumbotron">
      <h2>@yield('titulo')</h2>
    </div>
    <div class="col-sm-3 coluna">
      <h1>
        <a href = "/grupos/create" >
          <i class="fas fa-plus-circle" aria-hidden="true"> Grupo</i>
        </a>
      </h1>
      <p>@yield('coluna')</p>
    </div>
    <div class="col-sm-9 conteudo">
      <h3>@yield('con_titulo')</h3>
      @yield('foto')
      <div class="container-fluid">
        <div class="row flex">
          @yield('content')
        </div>
      </div>
    </div>

  </div>
</div>

@include('parciais/rodape')
