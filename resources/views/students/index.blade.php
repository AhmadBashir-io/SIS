@extends('layouts.app')
    @section('content')
        @if(count($students) > 0)
                    <h1 style="text-align:center;">Students</h1>
                    <h3 style="text-align:center;">{{count($students)}} Student(s) and still counting...</h3>
                        <table class="table jumbotron">
                            <tr>
                                <th>Full Name</th>
                                <th>Index Number</th>
                                <th>Email Address</th>
                                <th>Phone Number</th>
                                <th>Date Created</th>
                            </tr>
                                @foreach($students as $student)
                                    <tr>
                                        <td><a href="./students/{{$student->id}}">{{$student->firstname}} {{$student->lastname}}</a></td>
                                        <td>{{$student->indexNo}}</td>
                                        <td>{{$student->email}}</td>
                                        <td>{{$student->phone}}</td>
                                        <td><small>Student created on {{$student->created_at}}</small></td>
                                    </tr>
                                @endforeach
                        </table>  
            {{$students->links()}}
        @else
            <p>No Students Available :'(.</p>
        @endif
    @endsection