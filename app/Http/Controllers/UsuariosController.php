<?php

namespace App\Http\Controllers;

use App\Models\usuarios;
use App\Http\Requests\StoreusuariosRequest;
use App\Http\Requests\UpdateusuariosRequest;
use App\Models\rol_user;
use App\Models\use_details;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list=usuarios::with('user_details')->get();
        return $list;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreusuariosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newUser=new usuarios();
        $newUser->name_user=$request->name_user;
        $newUser->password=$request->password;
        $newUser->status='a';
        $newUser->rol_id=rol_user::where('name','like','%usuario%')->value('id');
        $newUser->save();

        $data['nombre']=$request->nombre;
        $data['apellido']=$request->apellido;
        $data['phone']=$request->phone;
        $data['email']=$request->email;
        $data['direccion']=$request->direccion;
        $data['punto_ref']=$request->punto_ref;


        $newUser->user_details()->create($data);

        return response()->json([
            "message"       => "usuario creado exitoxamente",
            "response"      => $newUser,
          ]);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $list=usuarios::with('user_details')->where('id',$id)->get();
        return $list;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateusuariosRequest  $request
     * @param  \App\Models\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $newUser=usuarios::where('id',$id)->first();
        $newUser->name_user=$request->name_user;
        $newUser->password=$request->password;
        $newUser->status=$request->status;
        $newUser->rol_id=$request->rol_id;
        $newUser->save();

        $data['nombre']=$request->nombre;
        $data['apellido']=$request->apellido;
        $data['phone']=$request->phone;
        $data['email']=$request->email;
        $data['direccion']=$request->direccion;
        $data['punto_ref']=$request->punto_ref;


        $newUser->user_details()->update($data);

        return response()->json([
            "message"       => "usuario editado exitoxamente",
            "response"      => $newUser,
          ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(usuarios $usuarios)
    {
        //
    }

    public function login(Request $request){
        $user=usuarios::where('name_user',$request->name_user)
        ->where('password',$request->password)->first();

        if(empty($user)){
            return view('error',['data'=>$rols]);
        }

        else if(!empty($user) and $user->rol_id==2){
            session_start();
            $_SESSION['user_id']=$user->id;
            $_SESSION['user_name']=$user->name_user;
            return view('home',['n'=>$_SESSION['user_name']]);
        }
        else if(!empty($user) and $user->rol_id==3){
            session_start();
           
            return redirect()->route('index_clientes');
        }

    }
}
