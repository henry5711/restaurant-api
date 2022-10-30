<?php

namespace App\Http\Controllers;

use App\Models\pedidos;
use App\Http\Requests\StorepedidosRequest;
use App\Http\Requests\UpdatepedidosRequest;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=pedidos::get();

       return view('pedido_index',['data'=>$category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorepedidosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newrol=new pedidos();
        $newrol->user_id=$request->user_id;
        $newrol->direccion=$request->direccion;
        $newrol->status='a';
        $newrol->save();

        return redirect()->route('pedido_index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $rols=pedidos::where('id',$id)->get();
        return view('rolsshow',['data'=>$rols]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepedidosRequest  $request
     * @param  \App\Models\pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $newrol=pedidos::where('id',$id)->first();
        $newrol->user_id=$request->user_id;
        $newrol->direccion=$request->direccion;
        $newrol->status=$request->status;
        $newrol->save();

        $rols=pedidos::all();

       return redirect()->route('pedido_index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newrol=pedidos::where('id',$id)->first();
        $newrol->delete();

        return redirect()->route('pedido_index');
    }
}
