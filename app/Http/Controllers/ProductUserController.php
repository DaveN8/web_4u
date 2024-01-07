<?php

namespace App\Http\Controllers;

use App\Models\ProductUser;
use App\Http\Requests\StoreProductUserRequest;
use App\Http\Requests\UpdateProductUserRequest;
use App\Models\Desains;
use App\Models\Package;
use App\Models\User;

class ProductUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prouser = ProductUser::all();
        return view('productuserView',[
            'desain' => Desains::all(),
            'user' => User::all(),
            'prouser' => ProductUser::all(),
            'package' => Package::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('purchasingForm', [
            // 'categories' => Categories::all(),
            // 'id_user' => 'id_user',
            // 'id_desain' => 'id_desain'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductUserRequest $request)
    {
        //
        $this->validate($request, [
            'id_desains'=> 'required',
            'id_users' => 'required',
            'id_package' => 'required',
        ]);

        
        ProductUser::create([
            'id_desains' => $request->id_desains,
            'id_users' => $request->id_users,
            'id_package' => $request->id_package,
        ]);

        
        return redirect(route('prouser.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductUser $productUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductUser $productUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductUserRequest $request, ProductUser $productUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductUser $productUser)
    {
        //
    }
}
