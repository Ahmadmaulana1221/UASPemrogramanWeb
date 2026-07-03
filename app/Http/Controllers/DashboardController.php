<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\Transaksi;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'kategori' => category::count(),
            'produk' => Product::count(),
            'supplier' => Supplier::count(),
            'transaksi' => Transaksi::count(),
        ]);
    }
}