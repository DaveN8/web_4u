<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'nameMale',
        'nameFemale',
        'addressAcara',
        'dateAcara',
        'waktuAcara',
        'noTelp',
        'deskripsiAcara',
        'linkGdrive',
        
    ];

    // Di dalam model yang memiliki relasi
    // public function productUser()
    // {
    //     return $this->belongsTo(ProductUser::class, 'id_productUser');
    // }
}
