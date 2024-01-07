<?php

namespace App\Http\Controllers;

use App\Models\Transactions;
use App\Http\Requests\StoreTransactionsRequest;
use App\Http\Requests\UpdateTransactionsRequest;
use App\Models\Categories;
use App\Models\User;

class TransactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transactions = Transactions::all();
        return view('transactionView', [
            'transactions' => Transactions::all(),
            'categories' => Categories::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('purchasingForm', [
            'categories' => Categories::all(),
            'users' => User::all(), 
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTransactionsRequest $request)
    {
        // dd($request);
        $this->validate($request, [
            'buktiTransfer'=> 'required',
            'id_users' => 'required',
            'id_categories' => 'required',
        ]);

       
        Transactions::create([
            'buktiTransfer' => $request->file('buktiTransfer')->store('img', 'public'),
            'id_users' => $request->id_users,
            'id_categories' => $request->id_categories,
        ]);

        
        return redirect(route('transaction.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Transactions $transactions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transactions $transactions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransactionsRequest $request, Transactions $transactions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transactions $transactions)
    {
        //
    }
}
