<?php

namespace App\Http\Controllers;

use App\Models\detail_pedido;
use App\Http\Requests\Storedetail_pedidoRequest;
use App\Http\Requests\Updatedetail_pedidoRequest;
use Illuminate\Http\Request;

class DetailPedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=detail_pedido::get();

       return view('category_index',['data'=>$category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storedetail_pedidoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newrol=new detail_pedido();
        $newrol->pedido_id=$request->pedido_id;
        $newrol->product_id=$request->product_id;
        $newrol->save();

        return redirect()->route('index_category');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\detail_pedido  $detail_pedido
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $rols=detail_pedido::where('id',$id)->get();
        return view('detailshow',['data'=>$rols]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatedetail_pedidoRequest  $request
     * @param  \App\Models\detail_pedido  $detail_pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $newrol=detail_pedido::where('id',$id)->first();
        $newrol->pedido_id=$request->pedido_id;
        $newrol->product_id=$request->product_id;
        $newrol->save();

        $rols=detail_pedido::all();

       return redirect()->route('index_rol');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\detail_pedido  $detail_pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newrol=detail_pedido::where('id',$id)->first();
        $newrol->delete();

        return redirect()->route('index_rol');
    }
}
