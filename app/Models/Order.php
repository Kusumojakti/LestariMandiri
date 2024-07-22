<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'faktur_id',
        'kodeBrg',
        'quantity',
        'total',
    ];


    public function barang(): HasOne
    {
        return $this->hasOne(Barang::class, 'kodeBrg', 'kodeBrg');
    }

    // public function faktur(): HasOne
    // {
    //     return $this->hasOne(Faktur::class, 'id', 'faktur_id');
    // }
    public function faktur(): BelongsTo
    {
        return $this->belongsTo(Faktur::class, 'faktur_id', 'id');
    }
}
