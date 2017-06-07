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
<style>
    .content {
        margin: 00px 150px 100px 80px;
    }
</style>
<body>
<h1>SCHOOL HOME</h1>
@include('inc.messages')
@section('content')
    <div class ="content">
        <h2>DATA</h2>
        @php
            $countofclass=[];


            for ($i = 0; $i < 10; $i++) {
                 $countofclass[$i]=0;
            }

            foreach($data as $i)
                ++$countofclass[$i->class];

            for ($i = 0; $i < 10; $i++) {
                 if($countofclass[$i]>0)
                    echo "for class $i the number of students are $countofclass[$i] \n <br>" ;
            }

        @endphp
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
    </div>
</body>

</body>
</html>
