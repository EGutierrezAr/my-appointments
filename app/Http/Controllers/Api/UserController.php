<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;

class UserController extends Controller
{
    public function show ()
    {
    	return Auth::guard('api')->user();
    }

    public function update (Request $request)
    {
    	$user = Auth::guard('api')->user();
    	$user->name = $request->name;
    	$user->phone = $request->phone;
    	//$user->address = $request->address;
    	$user->save();

    	JwtAuth::clearCache($user); //Limpiar cache solo si se ha cambiado, por que cuanso se consulta un usuario se conulta de la cache
    }
}
