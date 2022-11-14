<?php

namespace App\Http\Controllers;

use App\Buyer;
use App\User;

use App\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RequestStack;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
  
    public function insertTransaksi(Request $request){
        $data=new Transaction();
        $data->buyer_id=$request->get('pembeli');
        $data->user_id=$request->get('user');
        $data->transaction_date=Carbon::now();


        // $data = DB::table('products');

        
        
        $data->save();
        return redirect()->route('Obat.Transaction.transactions')->with('status','Obat is added');

     }

    public function showAjax(Request $request){
        $id=($request->get('id'));
        $data=Transaction::find($id);
        $products=$data->products;
        // dd($products);
        return response()->json(array(
            'msg'=> view('Obat.Transaction.showmodal',compact('data','products'))->render()
        ),200);

    }
    public function index()
    {
       
        //
        $data=Transaction::all();
        return view('Obat.Transaction.transactions',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //ambil data user dan buyer
        $user=User::all();
        $buyer=Buyer::all();
        return view('Obat.Transaction.create',compact('user','buyer'));


        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data=new Transaction();
        $data->buyer_id=$request->get('pembeli');
        $data->user_id=$request->get('user');
        $data->transaction_date=Carbon::now();

        // $data = DB::table('products');

        $data->save();
        return redirect()->route('Transaction.index')->with('status','Obat is added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
