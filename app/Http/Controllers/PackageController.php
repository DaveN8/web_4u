<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index(){
        return view('landingPage');
    }

    public function create(){
        return view('formPackages');
    }

    public function store(Request $request){
        // dd($request->all());
        $data = $request->validate([
            'fullname' => 'required|string|max:155',
            'addressAcara' => 'required|string|max:500',
            'dateAcara' => 'required|date',
            'jenisPaket' => 'required',
            'deskripsiAcara' => 'required|string|max:500',
        ]);

        $newProduct = Package::create($data);

       return redirect(route('hasilPackage'));

        // dd($request);

    }
}
