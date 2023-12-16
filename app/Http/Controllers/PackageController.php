<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $package = Package::all();
        return view('pembelianPage', compact('package'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formPackages');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'fullname' => 'required|string|max:155',
            'addressAcara' => 'required|string|max:500',
            'dateAcara' => 'required|date',
            'waktuAcara' => 'required',
            'jenisPaket' => 'required',
            'deskripsiAcara' => 'required|string|max:500',
            'buktiTransfer' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);
        Package::create([
            'fullname' => $request->fullname,
            'addressAcara' => $request->addressAcara,
            'dateAcara' => $request->dateAcara,
            'waktuAcara' => $request->waktuAcara,
            'jenisPaket' => $request->jenisPaket,
            'deskripsiAcara' => $request->deskripsiAcara,
            'buktiTransfer' => $request->file('buktiTransfer')->store('img', 'public'),
        ]);


        return redirect(route('package'));
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
