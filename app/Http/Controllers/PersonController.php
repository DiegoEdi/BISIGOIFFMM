<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People; 
use App\Models\Category;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $person=People::all();
        return view ('dashboard.person.index',['person'=>$person]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $providers =People::where ('type','proveedor');
        $user = auth()->user();

        return view ('dashboard.person.create',['providers'=> $providers ,'user' => $user ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $person= new People();
        $person->type=$request->input('type');
        $person->First_Name=$request->input('First_Name');
        $person->Last_Name=$request->input('Last_Name');
        $person->Document_Type=$request->input('Document_Type');
        $person->Document_Number=$request->input('Document_Number');
        $person->Adress=$request->input('Adress');
        $person->Phone=$request->input('Phone');
        $person->Email=$request->input('Email');
        $person->save();
        $person=People::all();
        return view ('dashboard.person.index',['person'=>$person]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view ('dashboard.person.edit',['category'=>$category]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $person=People::find($id);
        return view('dashboard.person.edit',['person'=>$person,'category'=>Category::all()]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Buscar la persona por su ID
        $person = People::find($id);
        $person->type=$request->input('type');
        $person->First_Name=$request->input('First_Name');
        $person->Last_Name=$request->input('Last_Name');
        $person->Document_Type=$request->input('Document_Type');
        $person->Document_Number=$request->input('Document_Number');
        $person->Adress=$request->input('Adress');
        $person->Phone=$request->input('Phone');
        $person->Email=$request->input('Email');
        $person->save();
        $person=People::all();
        return view ('dashboard.person.index',['person'=>$person]);

    }

        //return view ("dashboard.person.message",['msg'=>"Registro agregado con exito"]); 
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $person=People::find($id);
        $person->delete();
        return redirect("dashboard/person");
    }
}
