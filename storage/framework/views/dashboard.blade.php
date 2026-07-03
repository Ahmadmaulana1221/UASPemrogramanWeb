@extends('layouts.app')

@section('title','Dashboard')

@section('content')

<div class="row">

    <div class="col-md-3">
        <div class="card bg-primary text-white">
            <div class="card-body text-center">
                <h1>{{ $kategori }}</h1>
                Total Kategori
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card bg-success text-white">
            <div class="card-body text-center">
                <h1>{{ $produk }}</h1>
                Total Produk
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card bg-warning text-white">
            <div class="card-body text-center">
                <h1>{{ $supplier }}</h1>
                Total Supplier
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card bg-danger text-white">
            <div class="card-body text-center">
                <h1>{{ $transaksi }}</h1>
                Total Transaksi
            </div>
        </div>
    </div>

</div>

<div class="card mt-4">
    <div class="card-body">

        <h3>Selamat Datang 👋</h3>

        <p>
            Selamat datang di Sistem Informasi Toko Farfum.
        </p>

    </div>
</div>

@endsection