<?php

namespace App\Http\Controllers;

use App\Models\Produk;

class ProductController extends Controller
{
    public function showCategory($id)
    {
        $kategori = Kategori::find($id);
        $semuadata = Produk::where('id_kategori', 'LIKE', '%' . $id . '%')->get();
        $datakategori = Kategori::all();

        return view('category', compact('kategori', 'semuadata', 'datakategori'));
    }
}
{
    //
}
