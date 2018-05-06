@extends('layouts.app')
    @section('content')
    <h3 style="text-align:center;">{{count($students)}} Student(s) and still counting...</h3>
        <h1>Students</h1>
        @if(count($students) > 0)
            @foreach($students as $student)
                <div class="jumbotron">
                    <h3><a href="./students/{{$student->id}}">{{$student->firstname}} {{$student->lastname}}</a></h3>
                    <p>Index No: {{$student->indexNo}}</p>
                    <p>Email: {{$student->email}}</p>
                    <p>Phone: {{$student->phone}}</p>
                    <small>Student created on {{$student->created_at}}</small>
                </div>
            @endforeach
            {{$students->links()}}
        @else
            <p>No Students Available :'(.</p>
        @endif
        
    
    @endsection