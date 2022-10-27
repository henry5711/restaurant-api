<?php

namespace App\Http\Controllers;

use App\Models\products;
use App\Http\Requests\StoreproductsRequest;
use App\Http\Requests\UpdateproductsRequest;
use App\Models\imagenes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=products::get();

       return view('product_index',['data'=>$category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreproductsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newrol=new products();
        $newrol->name=$request->name;
        $newrol->price=$request->price;
        $newrol->descripcion=$request->descripcion;
        $newrol->ingredientes=$request->ingredientes;
        $newrol->status='a';
        $newrol->categorie_id=$request->categorie_id;
        $newrol->save();

        if($request->url){
        $img= new imagenes();
            $path = Storage::putFile('public/imagenes', $request->url);
                $cont=env('APP_URL').Storage::url($path);
                $img['url']=$cont;
                $img['product_id']=$newrol->id;
                $img->save();
        }

        return redirect()->route('index_product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $rols=products::where('id',$id)->get();
        return view('rolsshow',['data'=>$rols]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateproductsRequest  $request
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $newrol=products::where('id',$id)->first();
        $newrol->name=$request->name;
        $newrol->price=$request->price;
        $newrol->descripcion=$request->descripcion;
        $newrol->ingredientes=$request->ingredientes;
        $newrol->status=$request->status;
        $newrol->categorie_id=$request->categorie_id;
        $newrol->save();

        $rols=products::all();

       return redirect()->route('index_rol');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newrol=products::where('id',$id)->first();
        $newrol->delete();

        return redirect()->route('index_product');
    }

    public function prevupdate(int $id)
    {
        $rols=products::where('id',$id)->get();
        return view('product_update',['data'=>$rols]);
    }
}
