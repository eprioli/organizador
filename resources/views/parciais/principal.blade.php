@include('parciais/cabecalho')

<div class="container">
  <div class="row flex">
    <div class="jumbotron">
      <h2>@yield('titulo')</h2>
    </div>
      @yield('content')
  </div>
</div>

@include('parciais/rodape')
