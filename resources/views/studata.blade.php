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
        <h2>DATA</h2>
        @if(count($data)>0)
          @foreach($data as $i)
            <ul class="list-group">
              <li class="list-group-item">Name: {{$i->student}}</li>
              <li class="list-group-item">Class: {{$i->class}}</li>
              <li class="list-group-item">Division: {{$i->division}}</li>
            </ul>
          @endforeach
        @endif
         <div class="container">
            @yield('content')
        </div>
        <div>
          <a href="/" class="btn btn-danger" role="button">Go Back!</a>
        </div>

    </body>
</html>
