<?php

namespace App\Http\Controllers;

use App\Category;
use App\Obat;
use App\Product;
use App\Transaction;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function produk_trans()
    {

        $produk = Product::all();
        $transaksi = Transaction::all();

        return view('Obat.Product.product_trans', compact('produk', 'transaksi'));
    }
    public function simpan_produk_trans(Request $request)
    {

        // $data=new Product();
        // $data=new Product();

        $data = DB::table('product_transaction')->insert([
            'product_id' => $request->get('produk'),
            'transaction_id' => $request->get('transaksi'),
            'quantity' => $request->get('quantity'),
            'price' => $request->get('price'),

        ]);





       
        return redirect()->route('Obat.index')->with('status', 'Obat is added');
    }
    public function index()
    {
        //
        // $queryRaw = DB::select(DB::raw(" Select * From categories"));
        // $queryBuilder = DB::table('products')->get();
        // return view('Obat.product',['data'=>$queryBuilder]);

        $queryBuilder = DB::table('products')->get();
        return view('Obat.Product.products', ['data' => $queryBuilder]);

        // $queryModel = Category::all();
        // dd($queryModel);





    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categori = DB::table('categories')->get();
        // return view("Obat.Buyer.create",compact("categori"));
        return view('Obat.Product.create', compact("categori"));
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
        $data = new Product();
        // $data = DB::table('products');

        $data->nama = $request->get('nama_obat');
        $data->form = $request->get('form_obat');
        $data->restriction = $request->get('restriction');
        $data->description = $request->get('deskripsi');
        $data->category_id = $request->get('kategori_id');

        $data->faskes1 = $request->get('faskes1');
        $data->faskes2 = $request->get('faskes2');
        $data->faskes3 = $request->get('faskes3');
        $data->image = $request->get('image');

        $data->save();
        return redirect()->route('Obat.index')->with('status', 'Obat is added');
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
        return view('Obat.Product.show', compact('dataproduct'));
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
