<?php

namespace App\Models;

use App\Models\Faculty;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Department extends Model
{
    use HasFactory;
    // not include timestams
    public $timestamps = false;
    
    protected $fillable = [
        'name', 'email', 'contact', 'description',
    ];

    public function faculty(){
        return $this->belongsTo(Faculty::class);
    }
}
