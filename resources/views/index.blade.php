@include('parciais/cabecalho')

<div class="container">
  <div class="jumbotron">
    <h2>@yield('mainTitle')</h2>
  </div>

  <div class="row flex">
    @yield('content')
  </div>
</div>

@include('parciais/rodape')
