<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Products::all();
        return view('productsPage', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createProducts');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_product' => 'required|string|max:155',
            'foto_product' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        Products::create([
            'nama_product' => $request->nama_product,
            'foto_product' => $request->file('foto_product')->store('img', 'public'),
        ]);


        return redirect(route('productsPage'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('editProduct', [
            'product' => Products::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Products::findOrFail($id);

        if ($request->file('foto_product')) {
            unlink('storage/' . $product->foto_product);
            $product->update([
                'nama_product' => $request->nama_product,
                'foto_product' => $request->file('foto_product')->store('img', 'public')
            ]);
        };

        
        return redirect('productsPage');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
