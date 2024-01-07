<?php

namespace App\Http\Controllers;

use App\Models\Desains;
use App\Models\Package;
use App\Models\ProductUser;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $package = Package::all();
        return view('pembelianPage',[
            'package' => Package::all(),
            'productUser' => ProductUser::all(),
            'desain' => Desains::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formPackages', [
            'productUser' => ProductUser::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nameMale' => 'required',
            'nameFemale' => 'required',
            'addressAcara' => 'required',
            'dateAcara' => 'required',
            'waktuAcara' => 'required',
            'noTelp' => 'required',
            'deskripsiAcara' => 'required',
            'linkGdrive' => 'required',
           
        ]);
        Package::create([
            'nameMale' => $request->nameMale,
            'nameFemale' =>$request->nameFemale,
            'addressAcara' => $request->addressAcara,
            'dateAcara' =>  $request->dateAcara,
            'waktuAcara' =>  $request->waktuAcara,
            'noTelp' => $request->noTelp,
            'deskripsiAcara' => $request->deskripsiAcara,
            'linkGdrive' => $request->linkGdrive,
            
        ]);

        

        return redirect(route('prouser.index'));
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
