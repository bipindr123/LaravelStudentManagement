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
        <h1>SCHOOL HOME DATABSE</h1>
        @include('inc.messages')
        @section('content')
        <h2>WELCOME</h2>
          <br>
          <h3>
            SEARCH STUDENT DATA
          </h3>
          {!! Form::open(['url' => '/stuData2']) !!}
            <div class="form-group">
              {{Form::label('susn', 'SEARCH BY USN')}}
              {{Form::text('susn', '',[ 'class'=>'form-control', 'placeholder' => 'Enter search usn'])}}
            </div>

              <div>
                {{Form::submit('SEARCH',['class'=>"btn btn-success"])}}
              </div>


            {!! Form::close() !!}
<br>
            <h3>
              DELETE STUDENT DATA
            </h3>
            {!! Form::open(['url' => '/stuData3']) !!}
              <div class="form-group">
                {{Form::label('susn', 'DELETE BY USN')}}
                {{Form::text('susn', '',[ 'class'=>'form-control', 'placeholder' => 'Enter search usn'])}}
              </div>
                <div>
                  {{Form::submit('DELETE USN',['class'=>"btn btn-danger"])}}
                </div>

              {!! Form::close() !!}


            <hr>

            <h2>REGISTER NEW STUDENT</h2>

            {!! Form::open(['url' => '/submit']) !!}

            <div class="form-group">
              {{Form::label('usn', 'usn')}}
              {{Form::text('usn', '',[ 'class'=>'form-control', 'placeholder' => 'Enter usn'])}}
            </div>

              <div class="form-group">
                {{Form::label('student','Student')}}
                {{Form::text('student', '',[ 'class'=>'form-control', 'placeholder' => 'Name'])}}
              </div>

              <div class="form-group">
                {{Form::label('class', 'Semester')}}
                {{Form::text('class', '',[ 'class'=>'form-control', 'placeholder' => 'Enter class'])}}
              </div>

              <div class="form-group">
                {{Form::label('division', 'Divison')}}
                {{Form::text('division', '',[ 'class'=>'form-control', 'placeholder' => 'Enter division'])}}
              </div>

              <div class="form-group">
                {{Form::label('branch', 'Branch')}}
                {{Form::text('branch', '',[ 'class'=>'form-control', 'placeholder' => 'Enter Branch'])}}
              </div>

              <div class="form-group">
                {{Form::label('cie1', 'Cie1')}}
                {{Form::text('cie1', '',[ 'class'=>'form-control', 'placeholder' => 'Enter CIE1'])}}
              </div>

              <div class="form-group">
                {{Form::label('cie2', 'Cie2')}}
                {{Form::text('cie2', '',[ 'class'=>'form-control', 'placeholder' => 'Enter CIE2'])}}
              </div>


              <div>
                {{Form::submit('SUBMIT',['class'=>"btn btn-primary"])}}
              </div>
            {!! Form::close() !!}
            <br>
            <a href="/stuData" class="btn btn-danger" role="button">Show Data</a>



            <br>

            <br>
        @endsection



         <div class="container">
            @yield('content')
        </div>
    </body>
</html>
