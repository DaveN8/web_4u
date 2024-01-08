<?php

namespace App\Http\Controllers;

use App\Models\Transactions;
use App\Http\Requests\StoreTransactionsRequest;
use App\Http\Requests\UpdateTransactionsRequest;
use App\Models\Categories;
use Illuminate\Http\Request;
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
    public function create(Request $request)
    {
        return view('purchasingForm', [
            'categories' => Categories::all(),
            'id_users' => $request->input('id_users'),
            'id_categories' => $request->input('id_categories')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTransactionsRequest $request)
    {
        // dd($request);
        $this->validate($request, [
            'id_users' => 'required',
            'id_categories' => 'required',
            'buktiTransfer'=> 'required',
        ]);
        
        Transactions::create([
            'id_users' => $request->id_users,
            'id_categories' => $request->id_categories,
            'buktiTransfer' => $request->file('buktiTransfer')->store('img', 'public'),
        ]);
        
        // $trans = Transactions::create([
        //     'buktiTransfer' => $request->file('buktiTransfer')->store('img', 'public'),
        //     'id_users' => $request->id_users,
        //     'id_categories' => $request->id_categories,
        // ]);

        // $id_transactions = $trans->id;

        
        return redirect(route('transaction.index'));
        // return view('desain.index', compact('id_transactions'));
        // return redirect()->action('transactions.create', ['id_transactions' => $id_transactions]);
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
