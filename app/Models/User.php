<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
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

    public function getIsAdminAttribute()
    {
        return $this->roles->pluck('role')->contains('admin');
    }

    public function roles()
    {
        return $this->belongsToMany(User::class, 'role');
    }

    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'role'
    ];

    public function productuser()
    {
        return $this->hasMany(ProductUser::class);
    }

    public function transaction()
    {
        return $this->hasMany(Transactions::class);
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
