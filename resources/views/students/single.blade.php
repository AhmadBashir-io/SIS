@extends('layouts.app')
    @section('content')
        @include('inc.messages')
        <div class="jumbotron">
        <a href="./" class="btn btn-secondary float-right">Back</a>
        <h1>{{$student->firstname}} {{$student->lastname}}</h1>
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
    @endsection