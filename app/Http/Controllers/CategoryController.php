<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Http\Requests\StorecategoryRequest;
use App\Http\Requests\UpdatecategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=category::get();

       return view('category_index',['data'=>$category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newrol=new category();
        $newrol->name=$request->name;
        $newrol->descripcion=$request->descripcion;
        $newrol->status='a';
        $newrol->save();

        return redirect()->route('index_category');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $rols=category::where('id',$id)->get();
        return view('rolsshow',['data'=>$rols]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecategoryRequest  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $newrol=category::where('id',$id)->first();
        $newrol->name=$request->name;
        $newrol->descripcion=$request->descripcion;
        $newrol->status=$request->status;
        $newrol->save();

        $rols=category::all();

       return redirect()->route('index_category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newrol=category::where('id',$id)->first();
        $newrol->delete();

        return redirect()->route('index_category');
    }

    public function prevupdate(int $id)
    {
        $rols=category::where('id',$id)->get();
        return view('categoryupdate',['data'=>$rols]);
    }
}
