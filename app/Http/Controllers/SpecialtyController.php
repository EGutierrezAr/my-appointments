<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Specialty;

class SpecialtyController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

    public function index()
    {
    	$specialties =Specialty::all();
    	return view('specialties.index', compact('specialties'));
    }

    public function create()
    {
    	return view('specialties.create');
    }

    private function performValidation(Request $request)
    {
        //dd($request->all());
        $rules = [
            'name' => 'required|min:3'
        ];
        $messages = [
            'name.required' => 'Es necesario ingresar el nombre.',
            'name.min' => 'Como mínimo el nombre debe contener 3 caracteres.'
        ];
        $this->validate($request, $rules, $messages);
    }

    public function store(Request $request)
    {

    	$this->performValidation($request);

    	$specialty = new Specialty();
    	$specialty->name =$request->input('name');
    	$specialty->description =$request->input('description');
    	$specialty->save(); //INSERT

        $notification = 'La especialidad se ha registrado correctamente.';
    	return redirect('/specialties')->with(compact('notification'));
    }

    public function edit(Specialty $specialty){
    	return view('specialties.edit', compact('specialty'));
    }

    public function update(Request $request, Specialty $specialty)
    {

    	$this->performValidation($request);
        //$specialty->id = $request->input('id');
    	
        $specialty->name =$request->input('name');
    	$specialty->description =$request->input('description');
    	$specialty->save(); //UPDATE

        $notification = 'La especialidad se ha actualizado correctamente.';
    	return redirect('/specialties')->with(compact('notification'));
    }

    public function destroy(Specialty $specialty)
    {
        $deletedSpecialty = $specialty->name;
        $specialty->delete(); //DELETE

        $notification = 'La especialidad '.$deletedSpecialty.' se ha eliminado correctamente.';
        return redirect('/specialties')->with(compact('notification'));
    }
}