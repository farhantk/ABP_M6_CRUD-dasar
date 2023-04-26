<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class productController extends Controller
{
    public function index(){
        $prods = Product::get();
        return view('product.index', ['list' => $prods]);
    }

    public function create(){   
        return view('product.form', [
            'title' => 'Tambah',
            'method' => 'POST',
            'action' => '/product/create'
            ]);
    }

    public function store(Request $request){
        $prod = new product;
        $prod->name = $request->name;
        $prod->price = $request->price;
        $prod->save();
        return redirect('/product')->with('msg', 'Tambah berhasil');
    }

    public function show($id){
        return Product::find($id);
    }

    public function edit($id){
        return view('product.form', [
            'title' => 'Edit',
            'method' => 'PUT',
            'action' => "update",
            'data' => Product::find($id)
            ]);
    }

    public function update(Request $request, $id){
        $prod = product::find($id);
        $prod->name = $request->name;
        $prod->price = $request->price;
        $prod->save();
        return redirect('/product')->with('msg', 'Edit berhasil');
    }

    public function destroy($id){
        Product::destroy($id);
        return redirect('/product')->with('msg', 'Hapus berhasil');
    }
}