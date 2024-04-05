<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    // define Relationship course is belongto program
   
    public function programs(){
        return $this->belongsTo(Program::class);
    }

    public function students()
    {
        return $this->belongsToMany('App\Models\Student');
    }
}
