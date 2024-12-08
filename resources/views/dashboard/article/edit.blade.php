@extends('dashboard.master')
@section('titulo','Editar Articulo')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
  <form action="{{ route('article.update', $article->id) }}" method="post">
    @csrf
    @method('PUT') {{-- Método PUT para actualizar --}}
    
    <div class="form-group row">
        <label for="code" class="col-sm-2 col-form-label">Codigo</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="code" id="code" value="{{ old('code', $article->code) }}" placeholder="Ingresa el código del producto">
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $article->name) }}" placeholder="Ingresa el nombre del producto">
        </div>
    </div>    

    <div class="form-group row">
        <label for="category" class="col-sm-2 col-form-label">Categoria</label>
        <div class="col-sm-10">
            <select name="category" id="category" class="form-select" required>
                <option value="">Seleccionar Categoria</option>
                @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ $article->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
                @endforeach
            </select>
        </div>    
    </div>

    <div class="form-group row">
        <label for="Sale_Price" class="col-sm-2 col-form-label">Precio Venta</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="Sale_Price" id="Sale_Price" value="{{ old('Sale_Price', $article->Sale_Price) }}" placeholder="Ingresa el Precio de Venta">
        </div>
    </div>

    <div class="form-group row">
        <label for="stock" class="col-sm-2 col-form-label">Cantidad Disponible (stock)</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="stock" id="stock" value="{{ old('stock', $article->stock) }}" placeholder="Ingresa la cantidad disponible">
        </div>
    </div>

    <div class="form-group row">
        <label for="description" class="col-sm-2 col-form-label">Descripcion</label>
        <div class="col-sm-10">
            <textarea class="form-control" name="description" id="description">{{ 
