<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResponseQuestion extends Model
{
    protected $table="response_questions";
    use HasFactory;
    public function evaluationForm(){
        return $this->belongsTo(EvaluationForm::class);

    }
    public function semister (){
        return $this->belongsTo(Semister::class);
    }

    public function program (){
        return $this->belongsTo(Program::class);
    }

    public function course (){
        return $this->belongsTo(Course::class);
    }
    public function lecturer (){
        return $this->belongsTo(Lecturer::class);
    }
}
