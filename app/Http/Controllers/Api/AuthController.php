<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Validator;
use App\Http\Traits\ValidateAndCreatePatient;

use Auth;
use JwtAuth;
use App\User;




class AuthController extends Controller
{
	use ValidateAndCreatePatient;

    public function login(Request $request)
    {
    	$credentials = $request->only('email','password');

		if(Auth::guard('api')->attempt($credentials)) {
		    $user = Auth::guard('api')->user();
		    $jwt = JwtAuth::generateToken($user);
		    $success = true;

		    // Return successfull sign in response with the generated jwt.
		    return compact('success','user','jwt');
		} else {
		    $success = false;
		    $message = 'Invalid credentials';
		    return compact('success','message');
		}
    }

    public function logout()
    {
    	Auth::guard('api')->logout();
    	$success = true;
    	return compact('success');
    }

    public function register(Request $request)
    {
    	$this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        Auth::guard('api')->login($user);

        $jwt = JwtAuth::generateToken($user);
	    $success = true;

	    return compact('success','user','jwt');
    }

    /*-public function updatePassword (Request $request)
    {

       

        if (User::where('email', $request->email)->exists()) {


                    $rules = [
                        //'name'=>'required|min:3',
                        'email'=>'required|email',
                        //'cedula'=>'nullable|digits:8',
                        //'address'=>'nullable|min:5',
                        //'phone'=>'nullable|min:6'
                    ]; 
                    $this->validate($request, $rules);



            $id = User::select('id')->where('email', $request->email)->first();
            $user = User::patients()->findOrFail($id);

                             $data=$request->only('email');        
            $password = $request->password;
            
            if ($password)
                $data ['password'] = bcrypt ($password);
            
            $user->fill($data);
            $user->save($data);

            $success = $user->name;
        } else {
            $success = false;
        }
        return compact('success');
    }-*/

}
