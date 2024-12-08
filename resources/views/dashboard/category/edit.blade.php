@extends('dashboard.master')
@section('titulo','Editar Categoria')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
  <form action="{{ route('category.update', $category->id) }}" method="post">
    @csrf
    @method('PUT') {{-- Método PUT para actualizar --}}
    
    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-10">
            <!-- Pre-cargar el valor de la categoría existente -->
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $category->name) }}" placeholder="Ingresa el Nombre categoria">
        </div>
    </div>
    <div class="form-group row">
        <label for="description">Descripcion</label>
        <div class="col-sm-10">
            <!-- Pre-cargar el valor de la descripción -->
            <textarea class="form-control" name="description" id="description" placeholder="Ingresa la descripción de la categoría">{{ old('description', $category->description) }}</textarea>
        </div>
    </div>
    <div class="form-group row">
        <label for="state">Estado</label>
        <div class="col-sm-10">
            <!-- Seleccionar el estado actual -->
            <select class="form-control" name="state" id="state">
                <option value="1" {{ old('state', $category->state) == 1 ? 'selected' : '' }}>Activo</option>
                <option value="0" {{ old('state', $category->state) == 0 ? 'selected' : '' }}>Inactivo</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
           <button type="submit" class="btn btn-success">Actualizar</button>
           <a href="{{url('dashboard/category')}}" class="btn btn-secondary">Regresar</a>
        </div>
    </div>
  </form>  
</div>
@endsection
