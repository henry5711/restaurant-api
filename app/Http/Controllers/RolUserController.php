<?php

namespace App\Http\Controllers;

use App\Models\rol_user;
use App\Http\Requests\Storerol_userRequest;
use App\Http\Requests\Updaterol_userRequest;

class RolUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $rols=rol_user::all();

       return view('rols',['data'=>$rols]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storerol_userRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storerol_userRequest $request)
    {
        $newrol=new rol_user();
        $newrol->name=$request->name;
        $newrol->status='a';
        $newrol->save();

        $rols=rol_user::all();

       return view('rols',['data'=>$rols]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rol_user  $rol_user
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $rols=rol_user::where('id',$id)->get();
        return view('rolsshow',['data'=>$rols]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updaterol_userRequest  $request
     * @param  \App\Models\rol_user  $rol_user
     * @return \Illuminate\Http\Response
     */
    public function update(Updaterol_userRequest $request, $id)
    {
        $newrol=rol_user::where('id',$id)->first();
        $newrol->name=$request->name;
        $newrol->status=$request->status;
        $newrol->save();

        $rols=rol_user::all();

       return redirect()->route('index_rol');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rol_user  $rol_user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newrol=rol_user::where('id',$id)->first();
        $newrol->delete();

        $rols=rol_user::all();

        return view('rols',['data'=>$rols]);
    }

    public function formpost(){
        return view('rolstore');
    }

    public function prevupdate($id){
        $rols=rol_user::where('id',$id)->first();
        return view('rolsupdate',['data'=>$rols]);
    }
}
