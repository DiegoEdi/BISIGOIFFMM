@extends('dashboard.master')
@section('titulo','Personas')
@include('layouts/navigation')
@section('contenido')

<div class="container py-4">
    <h1>Registro de datos personales</h1>
    <br>
    <a href="{{url('dashboard/person/create')}}"class="btn btn-primary btn-sm">Nueva Persona</a>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>id Persona</th>
                <th>tipo</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Tipo de documento</th>
                <th>Numero de documento</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Correo electronico</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($person as $person)
            <tr>
                <td scope="row">{{$person->id}}</td>
                <td>{{$person->type}}</td>
                <td>{{$person->First_Name}}</td>
                <td>{{$person->Last_Name}}</td>
                <td>{{$person->Document_Type}}</td>
                <td>{{$person->Document_Number}}</td>
                <td>{{$person->Adress}}</td>
                <td>{{$person->Phone}}</td>
                <td>{{$person->Email}}</td>
                <td>
                    <div class="btn-group" role="group">
                        <a href="{{ url('dashboard/person/'.$person->id.'/create') }}" class="btn btn-success mx-1 custom-btn" style="font-size: 16px; padding: 4px 20px; height: 40px; display: flex; align-items: center; justify-content: center; min-width: 100px; margin: 0 5px;">Crear</a>
                        
                        <a href="{{ url('dashboard/person/'.$person->id.'/edit') }}" class="btn btn-warning mx-1 custom-btn" style="font-size: 16px; padding: 4px 20px; height: 40px; display: flex; align-items: center; justify-content: center; min-width: 100px; margin: 0 5px;">Editar</a>
                        
                        <form action="{{ url('dashboard/person/'.$person->id) }}" method="post" class="d-inline">
                            @method("DELETE")
                            @csrf
                            <button type="submit" class="btn btn-danger mx-1 custom-btn" style="font-size: 16px; padding: 4px 20px; height: 40px; display: flex; align-items: center; justify-content: center; min-width: 100px; margin: 0 5px;">Eliminar</button>
                        </form>
                    </div>                                                     
                </td>
            </tr>
            <tr>
                <td scope="row"></td>
                <td></td>
                <td></td>
            </tr>
            @endforeach 
        </tbody>
    </table>
</div>


@endsection  