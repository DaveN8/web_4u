<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desains extends Model
{
    use HasFactory;
    protected $table = 'desains';

    protected $fillable = [
        'templateProduct',
        'deskripsi',
        'status',
    ];

    public function productUser()
    {
        return $this->hasMany(ProductUser::class);
    }
}
