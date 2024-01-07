<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_categories',
        'harga',
        'deskripsi',
    ];

    public function transaction()
    {
        return $this->hasMany(Transactions::class);
    }

}
