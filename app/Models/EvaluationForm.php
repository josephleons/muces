<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluationForm extends Model
{
    use HasFactory;

    public $timestamps = false;
    public function students()
    {
        return $this->belongsToMany(Student::class);
    }

    public function responses (){
        return $this->hasMany(ResponseQuestion::class);
    }
}
