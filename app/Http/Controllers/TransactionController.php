<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Transactions;

class TransactionController extends Controller
{
    public function index()
    { 
        // JOIN CONTROLLER: PRODUCT + TRANSACTION
        $transactions = Users::join('transaction', 'transaction.user_id', '=', 'user.id')
                    ->join('product', 'product.id', '=', 'transaction.product_id')
              		->get();

        return view('user1.transaction', compact('transactions'));
    }

    public function create()
    {
        return view('add-form');
    }

    public function store(Request $request)
    {
        Transactions::create([
            'product_id' => (int)$request->product_id,
            'user_id' => (int)$request->user_id,
            'date' => $request->date,
            'quantity' => 1
        ]);
        
        Users::where('id', 1)->increment('star', 2);
        // $transactions = new Transactions;
        // $transactions->product_id = (int)$request->product_id;
        // $transactions->user_id = (int)$request->user_id;
        // $transactions->date = $request->date;
        // $transactions->quantity = 1;
        // $transactions->save();
        
        return redirect('/user1/transaction');
    }

    public function index2()
    { 
        // JOIN CONTROLLER: PRODUCT + TRANSACTION
        $transactions = Users::join('transaction', 'transaction.user_id', '=', 'user.id')
                    ->join('product', 'product.id', '=', 'transaction.product_id')
              		->get();

        return view('user2.transaction', compact('transactions'));
    }

    public function create2()
    {
        return view('add-form2');
    }

    public function store2(Request $request)
    {
        Transactions::create([
            'product_id' => (int)$request->product_id,
            'user_id' => (int)$request->user_id,
            'date' => $request->date,
            'quantity' => 1
        ]);
        
        Users::where('id', 2)->increment('star', 2);
        // $transactions = new Transactions;
        // $transactions->product_id = (int)$request->product_id;
        // $transactions->user_id = (int)$request->user_id;
        // $transactions->date = $request->date;
        // $transactions->quantity = 1;
        // $transactions->save();
        
        return redirect('/user2/transaction');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
