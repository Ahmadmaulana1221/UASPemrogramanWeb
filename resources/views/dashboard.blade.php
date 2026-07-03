@extends('layouts.app')

@section('content')

<h2 class="mb-4">Dashboard Toko Parfum</h2>

<div class="row">

    <!-- Total Kategori -->
    <div class="col-md-3 mb-3">
        <div class="card bg-primary text-white shadow">
            <div class="card-body text-center">
                <h2>{{ $kategori }}</h2>
                <p class="mb-0">Total Kategori</p>
            </div>
        </div>
    </div>

    <!-- Total Produk -->
    <div class="col-md-3 mb-3">
        <div class="card bg-success text-white shadow">
            <div class="card-body text-center">
                <h2>{{ $produk }}</h2>
                <p class="mb-0">Total Produk</p>
            </div>
        </div>
    </div>

    <!-- Total Supplier -->
    <div class="col-md-3 mb-3">
        <div class="card bg-warning text-white shadow">
            <div class="card-body text-center">
                <h2>{{ $supplier }}</h2>
                <p class="mb-0">Total Supplier</p>
            </div>
        </div>
    </div>

    <!-- Total Transaksi -->
    <div class="col-md-3 mb-3">
        <div class="card bg-danger text-white shadow">
            <div class="card-body text-center">
                <h2>{{ $transaksi }}</h2>
                <p class="mb-0">Total Transaksi</p>
            </div>
        </div>
    </div>

</div>

@endsection