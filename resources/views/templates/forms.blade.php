@section('content')


  <h1>Criar um novo produto</h1>

  {{-- Since HTML forms only support POST and GET, PUT and DELETE methods will be spoofed by automatically adding
  a _method hidden field to your form. --}}

  {{Form::open(['url' => 'foo/bar'])}}
  {{Form::close()}}

  {{-- By default, a POST method will be assumed; however, you are free to specify another method: --}}

  {{Form::open(['url' => 'foo/bar', 'method' => 'put'])}}
  {{Form::close()}}

  {{Form::open(['route' => 'route.name'])}}
  {{Form::close()}}

  {{Form::open(['route' => ['route.name', $user->id]])}}
  {{Form::close()}}

  {{Form::open(['action' => 'Controller@method'])}}
  {{Form::close()}}

  {{Form::open(['action' => ['Controller@method', $user->id]])}}
  {{Form::close()}}

  Labels
  Generating A Label Element
  {{Form::label('email', 'E-Mail Address')}}
  Specifying Extra HTML Attributes
  {{Form::label('email', 'E-Mail Address', ['class' => 'awesome'])}}

  Text, Text Area, Password & Hidden Fields
  Generating A Text Input
  {{Form::text('username')}}

  Specifying A Default Value
  {{Form::text('email', 'example@gmail.com')}}
  Note: The hidden and textarea methods have the same signature as the text method.

  Generating A Password Input
  {{Form::password('password', ['class' => 'awesome'])}}

  Generating Other Inputs
  {{Form::email($name, $value = null, $attributes = [])}}
  {{Form::file($name, $attributes = [])}}

  Checkboxes and Radio Buttons
  Generating A Checkbox Or Radio Input
  {{Form::checkbox('name', 'value')}}
  {{Form::radio('name', 'value')}}

  Generating A Checkbox Or Radio Input That Is Checked
  {{Form::checkbox('name', 'value', true)}}
  {{Form::radio('name', 'value', true)}}

  Number
  Generating A Number Input
  {{Form::number('name', 'value')}}

  Date
  Generating A Date Input
  {{Form::date('name', \Carbon\Carbon::now())}}

  File Input
  Generating A File Input
  {{Form::file('image')}}
  Note: The form must have been opened with the files option set to true.

  Drop-Down Lists
  Generating A Drop-Down List
  {{ Form::select('size', ['L' => 'Large', 'S' => 'Small'])}}

  Generating A Drop-Down List With Selected Default
  {{Form::select('size', ['L' => 'Large', 'S' => 'Small'], 'S')}}

  Generating a Drop-Down List With an Empty Placeholder
  This will create an <option> element with no value as the very first option of your drop-down.
  {{Form::select('size', ['L' => 'Large', 'S' => 'Small'], null, ['placeholder' => 'Pick a size...'])}}

  Generating A Grouped List
  {{Form::select('animal',[
      'Cats' => ['leopard' => 'Leopard'],
      'Dogs' => ['spaniel' => 'Spaniel'],
  ])}}

  Generating A Drop-Down List With A Range
  {{Form::selectRange('number', 10, 20)}}

  Generating A List With Month Names
  {{Form::selectMonth('month')}}

  Buttons
  Generating A Submit Button
  {{Form::submit('Click Me!')}}




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





@endsection
