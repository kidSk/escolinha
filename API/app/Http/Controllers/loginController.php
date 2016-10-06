<?php

namespace cmpn\Http\Controllers;

use Illuminate\Http\Request;

use cmpn\Http\Requests;
use cmpn\Http\Controllers\Controller;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use cmpn\User;
class loginController extends Controller
{

   public function userAuth(Request $request){

        // grava as credencias de login
    $credentials = $request->only('email','password');
    $token="null";
    try{ 
            //verifica as credencias e cria o token
        if (!$token=JWTAuth::attempt($credentials)) {
            return response()->json(['error' => 'credencias invalidos'],401);
        }
    } catch (JWTException $e) {

        return response()->json(['error' => 'impossivel criar token'], 500);
    }
    $user = JWTAuth::toUser($token);
        //tudo ok return token
    return response()->json(compact('token','user'));
}


public function index(){
    return User::all();
}
public function show($id){
    return User::find($id);
}
}
