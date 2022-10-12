<?php

namespace App\Http\Controllers;

use App\Models\detail_pedido;
use App\Http\Requests\Storedetail_pedidoRequest;
use App\Http\Requests\Updatedetail_pedidoRequest;

class DetailPedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storedetail_pedidoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storedetail_pedidoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\detail_pedido  $detail_pedido
     * @return \Illuminate\Http\Response
     */
    public function show(detail_pedido $detail_pedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatedetail_pedidoRequest  $request
     * @param  \App\Models\detail_pedido  $detail_pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Updatedetail_pedidoRequest $request, detail_pedido $detail_pedido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\detail_pedido  $detail_pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(detail_pedido $detail_pedido)
    {
        //
    }
}
