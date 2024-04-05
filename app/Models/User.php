<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        // 'name',
        'username',
        'password',
        // 'users_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // check admin roles
    public function is_admin(){
        return $this->users()->where('usertype','admin')->exists();
    }
//    check student roles
    public function is_student(){
        return $this->users()->where('usertype','student')->exists();
    }
    public function is_evaluator(){
        return $this->users()->where('usertype','evaluator')->exists();
    }
    public function is_dean(){
        return $this->users()->where('usertype','dean')->exists();
    }
    public function is_guest(){
        return $this->users()->where('usertype','guest')->exists();
    }
    
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    
    public function users(){
        return $this->hasMany(User::class,'id');
    }
    
    public function student(){
        return $this->hasOne(Student::class);
    }
    



    
}
