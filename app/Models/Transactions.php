<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transactions extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_users',
        'id_categories',
        'buktiTransfer',
        'statusTransaction'
    ];

    public function users():BelongsTo{
        return $this->belongsTo(User::class, 'id_users');
    }

    public function categories():BelongsTo{
        return $this->belongsTo(Categories::class, 'id_categories');
    }

    // public function products():BelongsTo{
    //     return $this->belongsTo(Products::class);
    // }
}
