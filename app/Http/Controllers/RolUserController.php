<?php

namespace App\Http\Controllers;

use App\Models\rol_user;
use App\Http\Requests\Storerol_userRequest;
use App\Http\Requests\Updaterol_userRequest;
use Illuminate\Http\Request;

class RolUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $rols=rol_user::get();

       return view('rol_index',['data'=>$rols]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storerol_userRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $newrol=new rol_user();
        $newrol->name=$request->name;
        $newrol->status='a';
        $newrol->save();

        return redirect()->route('index_rol');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rol_user  $rol_user
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        session_start();
        dd($_SESSION['hola']);
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

        return redirect()->route('index_rol');
    }

    public function formpost(){
        return view('rolstore');
    }

    public function prevupdate($id){
        $rols=rol_user::where('id',$id)->get();
        return view('rol_edit',['data'=>$rols]);
    }
}
