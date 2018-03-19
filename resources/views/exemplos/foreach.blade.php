<h2>Lista de produtos:</h2>
<ul>
  @foreach ($produtos as $produto)
    <li>
      <a href="http://localhost:8000/produtos/{{ $produto->id }}">
      <a href="produtos/{{ $produto->id }}">
        {{ $produto->titulo }}
      </a>
    </li>
  @endforeach
</ul>
===============================================================================
