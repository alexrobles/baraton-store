<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function test(Request $request) {
        return "Accion de pruebas de User-Controlller";
    }
    function login(Request $request) {
       $json = $request->input('json', null);
       $params = json_decode($json);
       $params_array = json_decode($json,true);

       $validate = \Validator::make($params_array,[
        'user_name' => 'required|alpha',
        'password' => 'required|alpha'
       ]);

       if($validate->fails()){
            $data =  array(
                'status' =>  'error' ,
                'code' =>  404 ,
                'message' =>  'Usuario/Contraseña invalidos, valida' ,
                'errors' => $validate->errors()
            );
       }else {
            $data =  array(
                'status' =>  'success' ,
                'code' =>  200 ,
                'message' =>  'Se ha logeado correctamente',
                'errors' => $validate->errors() 
            );
       }

        return response()->json($data, $data['code']);
    }
}
