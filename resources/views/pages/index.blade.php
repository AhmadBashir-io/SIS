@extends('layouts.app')
    @section('content')
        <div class="jumbotron text-center">
            <h1>{{$title}}</h1>
            <hr width="200px">
            <h4>Student Management Simplyfied</h4>
            <br>
            <p><a class="btn btn-primary btn-lg" href="./create" role="button">Create Student</a> | <a class="btn btn-success  btn-lg" href="./students" role="button">Manage Student </a></p>            
        </div>
    @endsection