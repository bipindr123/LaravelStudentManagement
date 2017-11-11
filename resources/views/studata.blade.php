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
<h1>ELIGIBILITY CRITERIA FOR SEE</h1>
@include('inc.messages')
@section('content')
    <div class ="content">
        <h2>STUDENT DATA</h2>
        @php
            $countofclass=[];


            for ($i = 0; $i < 10; $i++) {
                 $countofclass[$i]=0;
            }

            foreach($data as $i)
                ++$countofclass[$i->class];

            for ($i = 0; $i < 10; $i++) {
                 if($countofclass[$i]>0)
                    echo "SEMESTER $i has $countofclass[$i] number of students \n <br>" ;
            }


        @endphp
          <h3>ELIGIBLE FOR SEE</h3>
        

        @if(count($data)>0)
            @foreach($data as $i)

              @if((($i->cie1+$i->cie2)/2)>20)

                <ul class="list-group">
                  <li class="list-group-item">USN: {{$i->usn}}</li>
                    <li class="list-group-item">Name: {{$i->student}}</li>
                    <li class="list-group-item">Semester: {{$i->class}}</li>
                    <li class="list-group-item">Division: {{$i->division}}</li>
                    <li class="list-group-item">Branch: {{$i->branch}}</li>
                    <li class="list-group-item">CIE 1: {{$i->cie1}}</li>
                    <li class="list-group-item">CIE 2: {{$i->cie2}}</li>
                    <li class="list-group-item">AVG: {{($i->cie1+$i->cie2)/2}}</li>
                </ul>
                @endif
            @endforeach
            <br>
              <h3>NOT ELIGIBLE</h3>
              @foreach($data as $i)
                @if((($i->cie1+$i->cie2)/2)<=20)

                <ul class="list-group">
                  <li class="list-group-item">USN: {{$i->usn}}</li>
                    <li class="list-group-item">Name: {{$i->student}}</li>
                    <li class="list-group-item">Semester: {{$i->class}}</li>
                    <li class="list-group-item">Division: {{$i->division}}</li>
                    <li class="list-group-item">Branch: {{$i->branch}}</li>
                    <li class="list-group-item">CIE 1: {{$i->cie1}}</li>
                    <li class="list-group-item">CIE 2: {{$i->cie2}}</li>
                    <li class="list-group-item">AVG: {{($i->cie1+$i->cie2)/2}}</li>
                </ul>
                @endif
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
