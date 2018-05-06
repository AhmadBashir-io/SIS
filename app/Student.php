<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // TABLE NAME
    protected $table = "students"; //to change the name of a table
    // PRIMARY KEY
    public $primaryKey = "id"; //to change the primary key
    // TIMESTAMP
    public $timestamps = true; //to change the timestamp
}
