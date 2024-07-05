<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $fillable = [
        'kodeBrg',
        'nama',
        'stock',
        'harga'
    ];

    protected $primaryKey = 'kodeBrg';
    public $incrementing = false;
    protected $keyType = 'string';
}
