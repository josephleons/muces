<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function user(){
        return $this->hasOne(User::class);
    }
    
    public function program(){
        return $this->belongsTo(Program::class);
    }
    
    public function courses()
    {
        return $this->belongsToMany('App\Models\Course');
    }

}
