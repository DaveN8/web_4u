<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PackageController extends Controller
{
    public function index(){
        $package = Package::all();
        if (Auth::check() && Auth::user()->role == "admin") {
            return view('pembelianPage', compact('package'));
        }else{
            return view('landingPage', compact('package'));
        }
       
    }

    // public function adminPackage(){
    //     $package = Package::all();
    //     return view('pembelianPage', compact('package'));
    // }

    public function create(){
        return view('formPackages');
    }

    public function store(Request $request){
        // dd($request->all());
        $this->validate($request,[
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

        // $newProduct = Package::create($data);

       return redirect(route('package'));

        // dd($request);

    }

    
}
