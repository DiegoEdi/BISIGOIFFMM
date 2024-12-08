@extends('dashboard.master')
@section('titulo','NuevaPersona')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
  <form action="{{ route('person.store') }}" method="post">
    @csrf
    <div class="form-group row">
        <label for="type">Tipo de Persona</label>
        <div class="col-sm-10">
            <select class="form-control" name="type" id="type">
                <option value="1">Persona Natural</option>
                <option value="0">Empresa</option>
                <option value="2">Proveedor</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="First_Name" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="First_Name" id="First_Name" placeholder="Ingresa el Nombre categoria">
        </div>
    </div>
    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Apellido</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="Last_Name" id="Last_Name" placeholder="Ingresa el Apellido categoria">
        </div>
    </div>
    <div class="form-group row">
        <label for="Document_Type">Tipo de Documento</label>
        <div class="col-sm-10">
            <select class="form-control" name="Document_Type" id="Document_Type">
                <option value="1">CC</option>
                <option value="0">NIT</option>
                <option value="2">TI</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="Document_Number" class="col-sm-2 col-form-label">Numero de Documento</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="Document_Number" id="Document_Number" placeholder="Ingresa el Numero de Documento categoria">
        </div>
    </div>
    <div class="form-group row">
        <label for="Adress" class="col-sm-2 col-form-label">Direccion</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="Adress" id="Adress" placeholder="Ingresa la Direccion categoria">
        </div>
    </div>
    <div class="form-group row">
        <label for="Phone" class="col-sm-2 col-form-label">Telefono</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="Phone" id="Phone" placeholder="Ingresa el Telefono categoria">
        </div>
    </div>
    <div class="form-group row">
        <label for="Email" class="col-sm-2 col-form-label">Correo</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="Email" id="Email" placeholder="Ingresa el Correo categoria">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
           <button type="submit" class="btn btn-success">Registrar</button>
           <a href="{{url('dashboard/person')}}" class="btn btn-secondary">Regresar</a>
        </div>
    </div>
  </form>  
</div>

@endsection