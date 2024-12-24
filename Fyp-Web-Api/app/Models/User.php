<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'phone_number',
        'email',
        'password',
        'pin',
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'pin',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class, 'user_id');
    }
}
