<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Silber\Bouncer\Database\HasRolesAndAbilities;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRolesAndAbilities, SoftDeletes;

    protected $fillable = [
        'first_name',
        'last_name',
        'birthdate',
        'email',
        'password',
    ];

    protected $appends = [
        'full_name'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getBirthdateAttribute($value)
    {
        return date('d-m-Y', strtotime($value));
    }

    public function getFullNameAttribute()
    {
        return "$this->first_name $this->last_name";
    }
}
