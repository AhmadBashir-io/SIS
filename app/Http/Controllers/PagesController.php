<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Student Information System!'; 
        return view('pages.index')->with('title',$title);
    }
    public function create(){
        $title = 'Create Student'; 
        return view('pages.create')->with('title',$title);
    }
    public function manage(){
        $title = 'Manage Students'; 
        return view('students.index')->with('title',$title);
    }
}
