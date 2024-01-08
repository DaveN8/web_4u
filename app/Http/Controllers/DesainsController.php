<?php

namespace App\Http\Controllers;

use App\Models\Desains;
use App\Http\Requests\StoreDesainsRequest;
use App\Http\Requests\UpdateDesainsRequest;
use App\Models\Package;

class DesainsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $desain = Desains::all();
        return view('productsPage', [
            'desain' => Desains::all(),
            'package' => Package::all(),
        ]);
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
    public function store(StoreDesainsRequest $request)
    {
        // @dd($request->all());
        $this->validate($request, [
            'templateProduct' => 'required',
            'deskripsi' => 'required|string|max:500',
        ]);


        Desains::create([
            'templateProduct' => $request->file('templateProduct')->store('img', 'public'),
            'deskripsi' => $request->deskripsi,
        ]);


        return redirect(route('desain.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Desains $desains)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Desains $desains, $id)
    {
        $desain = Desains::findOrFail($id);
        return view('detailDesain', compact('desain'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDesainsRequest $request, $id)
    {
        $desain = Desains::findOrFail($id);

        $desain->update([
            'status' => $request->status,
        ]);

        return redirect(route('desain.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Desains $desains)
    {
        //
    }
}
