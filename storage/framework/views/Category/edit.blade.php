@extends('layouts.app')

@section('title','Edit Kategori')

@section('content')

<div class="row justify-content-center">

<div class="col-md-7">

<div class="card shadow border-0">

<div class="card-header bg-warning">

<h4>

<i class="fas fa-edit"></i>

Edit Kategori

</h4>

</div>

<div class="card-body">

<form action="{{ route('categories.update',$category->id) }}"
method="POST">

@csrf
@method('PUT')

<div class="mb-3">

<label class="form-label">

Nama Kategori

</label>

<input type="text"
name="nama_kategori"
class="form-control"
value="{{ $category->nama_kategori }}">

</div>

<div class="text-end">

<a href="{{ route('categories.index') }}"
class="btn btn-secondary">

Kembali

</a>

<button class="btn btn-warning">

<i class="fas fa-save"></i>

Update

</button>

</div>

</form>

</div>

</div>

</div>

</div>

@endsection