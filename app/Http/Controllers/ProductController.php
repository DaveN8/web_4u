<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('productsPage');
    }

    public function create(){
        return view('createProducts');
    }

    public function store(Request $request){
        $data = $request->validate([
            'nama_product' => 'required|string|max:155',
            'foto_product' => 'required|image',
        ]);

        $newProduct = Products::create($data);

        return redirect(route('productsPage'));
 
    }
}
