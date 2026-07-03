<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $kategori = Category::all();
        return view('kategori.index', compact('kategori'));
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function store(Request $request)
    {
        Category::create([
            'nama_kategori' => $request->nama_kategori
        ]);

        return redirect('/kategori');
    }

    public function edit($id)
    {
        $kategori = Category::findOrFail($id);
        return view('kategori.edit', compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        $kategori = Category::findOrFail($id);

        $kategori->update([
            'nama_kategori' => $request->nama_kategori
        ]);

        return redirect('/kategori');
    }

    public function destroy($id)
    {
        Category::destroy($id);
        return redirect('/kategori');
    }
}