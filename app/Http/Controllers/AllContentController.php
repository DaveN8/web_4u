<?php

namespace App\Http\Controllers;

use App\Models\Desains;
use App\Models\Package;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;

class AllContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $user = User::where('role','member')->get();
        $product = Desains::all();
        $package = Package::all();

        $userCount = User::where('role','member')->count();
        $productCount = Desains::count();
        $packageCount = Package::count();

        return view('adminDashboard', compact('user','product','package','userCount','productCount','packageCount'));

        // return view('adminDashboard',[
        //     'user' => User::all(),
        //     'product' => Products::all(),
        //     'package' => Package::all(),
        //     'userCount' => User::where('role','member')->count(),
        //     'productCount' => Products::count(),
        //     'pakcageCount' => Package::count()
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
