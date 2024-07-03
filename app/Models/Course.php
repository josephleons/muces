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
        return $this->belongsToMany(Student::class);
    }

    public function semister(){
        return $this->belongsTo(Semister::class);
    }
    public function response_questions (){
        return $this->belongsTo(EvaluationForm::class);
    }
    public function lecturer(){
        return $this->belongsTo(Lecturer::class);
    }
}
