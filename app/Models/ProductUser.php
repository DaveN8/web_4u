<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductUser extends Model
{
    use HasFactory;

    protected $fillable =[
        'id_desains',
        'id_user',
        'id_package',
        'statusProductUsers'
    ];

    public function desains()
    {
        return $this->belongsTo(Desains::class, 'id_desains');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
