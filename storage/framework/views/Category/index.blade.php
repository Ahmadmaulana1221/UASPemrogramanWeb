@extends('layouts.app')

@section('title', 'Kategori')

@section('content')

<div class="card shadow border-0">

    <div class="card-header bg-white d-flex justify-content-between align-items-center">

        <h4 class="mb-0">
            <i class="fas fa-layer-group text-primary"></i>
            Data Kategori
        </h4>

        <a href="{{ route('categories.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i>
            Tambah Kategori
        </a>

    </div>

    <div class="card-body">

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-hover align-middle">

            <thead class="table-dark">

                <tr>

                    <th width="70">No</th>

                    <th>Nama Kategori</th>

                    <th width="180">Aksi</th>

                </tr>

            </thead>

            <tbody>

            @forelse($categories as $category)

                <tr>

                    <td>{{ $loop->iteration }}</td>

                    <td>{{ $category->nama_kategori }}</td>

                    <td>

                        <a href="{{ route('categories.edit',$category->id) }}"
                            class="btn btn-warning btn-sm">

                            <i class="fas fa-edit"></i>

                        </a>

                        <form action="{{ route('categories.destroy',$category->id) }}"
                              method="POST"
                              class="d-inline">

                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger btn-sm"
                                onclick="return confirm('Hapus data?')">

                                <i class="fas fa-trash"></i>

                            </button>

                        </form>

                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="3" class="text-center">

                        Belum ada data kategori

                    </td>

                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection