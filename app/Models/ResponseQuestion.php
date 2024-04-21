<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResponseQuestion extends Model
{
    use HasFactory;

    
    public function evaluationForm(){
        return $this->belongsTo(EvaluationForm::class);
    }
}
