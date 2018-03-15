@extends('../parciais/principal')
@section('aba','welcome')

@section('titulo')
  <a href = "/" class = "btn btn-success btn-lg" role = "button">
    Organizador home page
  </a>
@endsection


@section('coluna')

@endsection



@section('foto')

@endsection


@section('content')

    <div class="criacao">
      @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
        </div>
      @endif
      {!! Form::open(['action' => 'CategoryController@store']) !!}
        @include('category.form')
      {!! Form::close() !!}
      {{-- {!! Form::open(array('route' => 'category.store','method'=>'POST')) !!}
        @include('category.form')
      {!! Form::close() !!} --}}
    </div>






    <div class="form-group col-xs-12 col-sm-12 col-md-12">
      {{ Form::label('type', 'Tipo') }}<br>
      {{ Form::radio('type', 'link', null, ['required']) }} Link
      {{ Form::radio('type', 'category' , null, ['required']) }} Categoria
    </div>
    <div class="form-group col-xs-12 col-sm-12 col-md-12">
      {{ Form::label('name', 'Nome') }}
      {{ Form::text('name', null, ['class'=>'form-control', 'required', 'placeholder'=>'Nome do link ou da categoria']) }}
    </div>
    <div class="form-group col-xs-12 col-sm-12 col-md-12">
      {{ Form::label('url', 'URL') }}
      {{ Form::text('url', null, ['class'=>'form-control', 'placeholder'=>'Link da página que se quer guardar']) }}
    </div>
    <div class="form-group col-xs-12 col-sm-12 col-md-12">
      {{ Form::label('description', 'Descrição') }}
      {{ Form::textarea('description', null, ['class'=>'form-control', 'placeholder'=>'Descrição apenas da categoria - do link não precisa!', 'rows'=>3]) }}
    </div>
    <div class="form-group col-xs-12 col-sm-12 col-md-12">
      <a href="{{ route('category.index') }}"> <i class="fa fa-undo" aria-hidden="true" class="btn btn-primary"> Back</i></a>
      <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"> Salvar</i></button>
    </div>

    {{-- <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Name:</strong>
          {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control', 'required')) !!}
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Descrição:</strong>
          {!! Form::textarea('description', null, array('placeholder' => 'Descrição','class' => 'form-control', 'rows'=>'3', 'required')) !!}
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
      <a class="btn btn-primary" href="{{ route('category.index') }}"> <i class="fa fa-undo" aria-hidden="true"> Back</i></a>
      <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"> Salvar Categoria</i></button>
    </div> --}}






  <h1>Criar um novo produto</h1>

  {{Form::open(['action' => 'GrupoController@Store'])}}
  {{-- nome, descricao, grupo_id  --}}
  {{Form::text('nome')}}
  {{Form::text('descricao')}}
  {{Form::close()}}

@endsection
