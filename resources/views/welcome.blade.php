<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>School</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1>SCHOOL HOME</h1>
        @include('inc.messages')
        @section('content')
        <h2>WELCOME</h2>
            {!! Form::open(['url' => '/submit']) !!}
              <div class="form-group">
                {{Form::label('student','Student')}}
                {{Form::text('student', '',[ 'class'=>'form-control', 'placeholder' => 'Name'])}}
              </div>

              <div class="form-group">
                {{Form::label('class', 'Class')}}
                {{Form::text('class', '',[ 'class'=>'form-control', 'placeholder' => 'Enter class'])}}
              </div>

              <div class="form-group">
                {{Form::label('division', 'Divison')}}
                {{Form::text('division', '',[ 'class'=>'form-control', 'placeholder' => 'Enter division'])}}
              </div>

              <div>
                {{Form::submit('SUBMIT',['class'=>"btn btn-primary"])}}
              </div>


            {!! Form::close() !!}
        @endsection



         <div class="container">
            @yield('content')
        </div>
    </body>
</html>
