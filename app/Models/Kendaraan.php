<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Kendaraan extends Model
{
    use HasFactory;
    protected $fillable = [
        'noPol',
        'jenis_kendaraan',
        'BBM',
        'user_id'
    ];

    protected $primaryKey = 'noPol';
    public $incrementing = false;
    protected $keyType = 'string';

    public function driver(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
