<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>{{config('app.name' , 'SIS')}}</title>
    </head>
    <body class="container">
            <nav  class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
                <a href="../"class="navbar-brand" href="./">{{config('app.name' , 'SIS')}}</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarsExample09">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="../">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../students">Manage Student</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item">
                            <a class="nav-link" href="../create">Create Student</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <br>
        @include('inc.messages')
        <a href="./" class="btn btn-secondary float-right">Back</a>
        <h1>{{$student->firstname}} {{$student->lastname}}</h1>
        <div class="jumbotron">
            <p>{{$student->indexNo}}</p>
            <hr>
            {{$student->email}}
            <hr>
            {{$student->phone}}
            <hr>
            <small>Student Created at {{$student->created_at}}</small>
            <hr>
            <a href="./{{$student->id}}/edit" class="btn btn-primary">Edit Student</a>
            {!! Form::open(['action'=> ['StudentsController@destroy', $student->id], 'method' => 'POST', 'class' => 'float-right'] ) !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete' ,['class' => 'btn btn-danger'])}}
            {!! Form::close() !!}
        </div>
    </body>
</html>