<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'nama_produk',
        'category_id',
        'stok',
        'harga',
        'gambar'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}