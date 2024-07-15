<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People; 

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $person=Person::all();
        return view ('dashboard.Person.index',['Person'=>$person]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $providers = person::where ('type','proveedor');
        $users = Auth::user(); 
        return view ('dashboard.Person.create',['providers'=> $providers ,'user' => $users ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $person= new Person();
        $person->type=$request->input('type');
        $person->First_Name=$request->input('First_Name');
        $person->Last_Name=$request->input('Last_Name');
        $person->Document_Type=$request->input('Document_Type');
        $person->Document_Number=$request->input('Document_Number');
        $person->Adress=$request->input('Adress');
        $person->Phone=$request->input('Phone');
        $person->Email=$request->input('Email');
        $person->save();
        return view ("dashboard.person.message",['msg'=>"Registro agregado con exito"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view ('dashboard.Person.edit',['category'=>$person]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $person=Person::find(id);
        return view ('dashboard.Person.edit',['category'=>$person]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $person= new Person();
        $person->type=$request->input('type');
        $person->First_Name=$request->input('First_Name');
        $person->Last_Name=$request->input('Last_Name');
        $person->Document_Type=$request->input('Document_Type');
        $person->Document_Number=$request->input('Document_Number');
        $person->Adress=$request->input('Adress');
        $person->Phone=$request->input('Phone');
        $person->Email=$request->input('Email');
        $person->save();
        return view ("dashboard.person.message",['msg'=>"Registro agregado con exito"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $person=Person::find($id);
        $person->delete();
        return redirect ("dashboard/person");
    }
}
