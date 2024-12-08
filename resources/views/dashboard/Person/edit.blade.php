@extends('dashboard.master')
@section('titulo', 'Editar Persona')
@include('layouts.navigation')
@section('contenido')

<div class="container py-4">
  <form action="{{ route('person.update', $person->id) }}" method="post">
    @csrf
    @method('PUT') {{-- Método PUT para actualizar --}}

    <div class="form-group row">
        <label for="type">Tipo de Persona</label>
        <div class="col-sm-10">
            <select class="form-control" name="type" id="type">
                <option value="1" {{ $person->type == 1 ? 'selected' : '' }}>Persona Natural</option>
                <option value="0" {{ $person->type == 0 ? 'selected' : '' }}>Empresa</option>
                <option value="2" {{ $person->type == 2 ? 'selected' : '' }}>Proveedor</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="First_Name" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="First_Name" id="First_Name" value="{{ $person->First_Name }}" placeholder="Ingresa el Nombre">
        </div>
    </div>
    <div class="form-group row">
        <label for="Last_Name" class="col-sm-2 col-form-label">Apellido</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="Last_Name" id="Last_Name" value="{{ $person->Last_Name }}" placeholder="Ingresa el Apellido">
        </div>
    </div>
    <div class="form-group row">
        <label for="Document_Type">Tipo de Documento</label>
        <div class="col-sm-10">
            <select class="form-control" name="Document_Type" id="Document_Type">
                <option value="1" {{ $person->Document_Type == 1 ? 'selected' : '' }}>CC</option>
                <option value="0" {{ $person->Document_Type == 0 ? 'selected' : '' }}>NIT</option>
                <option value="2" {{ $person->Document_Type == 2 ? 'selected' : '' }}>TI</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="Document_Number" class="col-sm-2 col-form-label">Número de Documento</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="Document_Number" id="Document_Number" value="{{ $person->Document_Number }}" placeholder="Ingresa el Número de Documento">
        </div>
    </div>
    <div class="form-group row">
        <label for="Adress" class="col-sm-2 col-form-label">Dirección</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="Adress" id="Adress" value="{{ $person->Adress }}" placeholder="Ingresa la Dirección">
        </div>
    </div>
    <div class="form-group row">
        <label for="Phone" class="col-sm-2 col-form-label">Teléfono</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="Phone" id="Phone" value="{{ $person->Phone }}" placeholder="Ingresa el Teléfono">
        </div>
    </div>
    <div class="form-group row">
        <label for="Email" class="col-sm-2 col-form-label">Correo</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" name="Email" id="Email" value="{{ $person->Email }}" placeholder="Ingresa el Correo">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
           <button type="submit" class="btn btn-primary">Actualizar</button>
           <a href="{{ url('dashboard/person') }}" class="btn btn-secondary">Regresar</a>
        </div>
    </div>
  </form>  
</div>

@endsection
