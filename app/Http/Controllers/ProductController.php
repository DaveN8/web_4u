<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $product = Products::all();
        return view('productsPage', compact('product'));
    }

    public function create(){
        return view('createProducts');
    }

    public function store(Request $request){
        $this->validate( $request,[
            'nama_product' => 'required|string|max:155',
            'foto_product' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        Products::create([
            'nama_product' => $request->nama_product ,
            'foto_product' => $request->file('foto_product')->store('img', 'public'),
        ]);

        // $newName = '';
        // if ($request->file('foto_product')) {
        //     $extension = $request->file('foto_product')->getClientOriginalExtension();
        //     $newName = $request->nama_product . '-' . now()->timestamp . '.' . $extension;
        //     $request->file('foto_product')->storeAs('img', $newName);
        // }
        // $validatedData = $data;
        // $validatedData['foto_product'] = $newName;

        return redirect(route('productsPage'));
 
    }

    public function update($id){
        $product = Products::findOrfail($id);

        
    }
}
