<?php

namespace App\Http\Controllers;

class AdminController extends Controller{

    function showBeranda(){
        return view('beranda');
    }

    function showProduk(){
        return view('produk');
    }

    function showkategori(){
        return view('kategori');
    }

    function showPromo(){
        return view('promo');
    }

    public function Paginator(){
        $list_produk = Produk::all();

        $data['list'] = $list_produk->simplePaginate(2);
        return view('produk.index', $data);

        dd($list_produk);
    }

    
}