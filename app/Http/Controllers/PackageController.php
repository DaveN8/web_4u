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
        return view('pembelianPage', [
            'package' => Package::all(),
            'productUser' => ProductUser::all(),
            'desain' => Desains::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('formPackages', [
            'productUser' => ProductUser::all(),
            'id_desains' => $request->input('id_desains'),
            'id_user' => $request->input('id_user'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $id_desains = $request->input('id_desains');
        $id_user = $request->input('id_user');

        $this->validate($request, [
            'nameMale' => 'required',
            'nameFemale' => 'required',
            'addressAcara' => 'required',
            'dateAcara' => 'required',
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
            'nameFemale' => $request->nameFemale,
            'addressAcara' => $request->addressAcara,
            'dateAcara' =>  $request->dateAcara,
            'waktuAcara' =>  $request->waktuAcara,
            'noTelp' => $request->noTelp,
            'deskripsiAcara' => $request->deskripsiAcara,
            'linkGdrive' => $request->linkGdrive,
        ]);

        $package = Package::create([
            'nameMale' => $request->nameMale,
            'nameFemale' => $request->nameFemale,
            'addressAcara' => $request->addressAcara,
            'dateAcara' =>  $request->dateAcara,
            'waktuAcara' =>  $request->waktuAcara,
            'noTelp' => $request->noTelp,
            'deskripsiAcara' => $request->deskripsiAcara,
            'linkGdrive' => $request->linkGdrive,
        ]);

        $id_package = $package->id;

        return redirect()->action('prouser.store', ['id_desains' => $id_desains, 'id_user' => $id_user, 'id_package' => $id_package]);

        // return view;
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
