@extends('layouts.app')
    @section('content')
    <div class="jumbotron">
        <h1>{{$title}}</h1>
        {!! Form::open(['action'=> 'StudentsController@store', 'method' => 'POST'] ) !!}
                <div class="form-group">
                    {{form::label('firstname', 'First Name')}}
                    {{form::text('firstname', '', ['class' => 'form-control', 'placeholder' => 'Please Enter Student Firstname'])}}
                </div>
                <div class="form-group">
                    {{form::label('lastname', 'Last Name')}}
                    {{form::text('lastname', '', ['class' => 'form-control', 'placeholder' => 'Please Enter Student Lastname'])}}
                </div>
                <div class="form-group">
                    {{form::label('indexNo', 'Index No')}}
                    {{form::text('indexNo', '', ['class' => 'form-control', 'placeholder' => 'Please Enter Student Index Number'])}}
                </div>
                <div class="form-group">
                        {{form::label('email', 'Email')}}
                        {{form::email('email', '', ['class' => 'form-control', 'placeholder' => 'Please Enter Student Email Address'])}}
                </div>  
                <div class="form-group">
                        {{form::label('phone', 'Phone')}}
                        {{form::number('phone', '', ['class' => 'form-control', 'placeholder' => 'Please Enter Student Phone Number'])}}
                </div>      
                {{form::submit('Create!', ['class'=> 'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>    
    @endsection