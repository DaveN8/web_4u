<?php

namespace App\Http\Controllers;

use App\Models\ProductUser;
use App\Http\Requests\StoreProductUserRequest;
use App\Http\Requests\UpdateProductUserRequest;
use App\Models\Desains;
use App\Models\Package;
use App\Models\User;
use Illuminate\Http\Request;

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
    public function create(Request $request)
    {

      return view('productConfirmView', [
        'package' => Package::all(),
        'id_desains' => $request->input('id_desains'), 
        'id_user' => $request->input('id_user'), 
        'id_package' => $request->input('id_package'),
      ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductUserRequest $request)
    {
       
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
        dd($request);
        
        return view('porductuserView');
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
