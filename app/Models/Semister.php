<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semister extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function courses(){
        return $this->hasMany(Course::class);
    }
}
