<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'jumlah',
        'total',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}