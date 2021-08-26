<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Friend;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'first_name',
        'middle_name',
        'email',
        'password',
        'country',
        'phone',
        'role',
        'is_active',
        'is_blocked',
        'preference',
        'avatar',
        'background',
        'friend' => 'array',
    ];
    public function isAdmin() {
        return $this->role === 'admin';
     }
 
     public function isUser() {
        return $this->role === 'user';
     }
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected function friends()
    {
        return $this->hasMany(Friend::class);
    }
}
