<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'leenautos';
    protected $fillable = [
        'id',
        'merk',
        'type',
        'bouwjaar',
        'created_at',
        'updated_at',
    ];
}
