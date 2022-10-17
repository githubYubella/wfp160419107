<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $queryRaw = DB::select(DB::raw(" Select * From categories"));
        // $queryBuilder = DB::table('products')->get();
        // return view('Obat.product',['data'=>$queryBuilder]);

        $queryBuilder = DB::table('products')->get();
        return view('Obat.products', ['data' => $queryBuilder]);

        // $queryModel = Category::all();
        // dd($queryModel);




        echo 'Miok Sesat';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $dataproduct = DB::table('products')->where('id', $id)->first();
        // dd($dataproduct);
        return view('Obat.show', compact('dataproduct'));
    }

    public function showInfo()
    {
        return response()->json(array(
            'status' => 'oke',
            'msg' => "<div class='alert alert-info'>
             Did you know? <br>This message is sent by a Controller.'</div>"
        ), 200);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
