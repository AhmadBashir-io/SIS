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
            <a href="../../" class="navbar-brand" href="./">{{config('app.name' , 'SIS')}}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExample09">
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item">
                        <a class="nav-link" href="../../">Home</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="../">Manage Student</a>
                      </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item">
                            <a class="nav-link" href="../../create">Create Student</a>
                        </li>
                    </ul>
             </div>
        </nav>
        <br>
        <div class="jumbotron">
            <a href="./" class="btn btn-secondary float-right">Back</a>
            <h2>Update Student Information</h2>
            {!! Form::open(['action'=> ['StudentsController@update', $student->id], 'method' => 'POST'] ) !!}
                    <div class="form-group">
                        {{form::label('firstname', 'First Name')}}
                        {{form::text('firstname', $student->firstname, ['class' => 'form-control', 'placeholder' => 'Please Enter Student Firstname'])}}
                    </div>
                    <div class="form-group">
                        {{form::label('lastname', 'Last Name')}}
                        {{form::text('lastname', $student->lastname, ['class' => 'form-control', 'placeholder' => 'Please Enter Student Lastname'])}}
                    </div>
                    <div class="form-group">
                        {{form::label('indexNo', 'Index No')}}
                        {{form::text('indexNo', $student->indexNo, ['class' => 'form-control', 'placeholder' => 'Please Enter Student Index Number'])}}
                    </div>
                    <div class="form-group">
                        {{form::label('email', 'Email')}}
                        {{form::email('email', $student->email, ['class' => 'form-control', 'placeholder' => 'Please Enter Student Email Address'])}}
                    </div>  
                    <div class="form-group">
                        {{form::label('phone', 'Phone')}}
                        {{form::number('phone', $student->phone, ['class' => 'form-control', 'placeholder' => 'Please Enter Student Phone Number'])}}
                    </div>      
                    {{form::hidden('_method', 'PUT')}}
                    {{form::submit('Update!', ['class'=> 'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
    </body>
</html>