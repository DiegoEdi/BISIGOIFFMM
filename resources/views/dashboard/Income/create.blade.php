@extends('dashboard.master')
@section('titulo','Ingresos')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
  <form action="{{ route('income.store') }}" method="post">
    @csrf
    <div class="form-group row">
        <label for="code" class="col-sm-2 col-form-label">Codigo</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="code" id="code" placeholder="Ingresa el codigo de venta">
        </div>
    </div>
    <div class="form-group row">
        <label for="provider_id" class="col-sm-2 col-form-label">Proveedor</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="provider_id" id="name" placeholder="Ingresa el proveedor">
        </div>
    <div>    
    <div class="form-group row">
        <label for="user_id" class="col-sm-2 col-form-label">Id usuario</label>
        <div class="col-sm-10">
            <select name="category" id="category" class="form-select" required >
                <option value="">Seleccionar Categoria<option>
                @foreach($category as $category)
                <option value="{{$category->id}}">{{$category->name }}</option>
                @endforeach
            </select>
        </div>    
    <div>    
    <div class="form-group row">
        <label for="receipt_type" class="col-sm-2 col-form-label">Tipo de recibo</label>
        <div class="col-sm-10">
                <input type="text" class="form-control" name="receipt_type" id="receipt_type" placeholder="ingrese el recibo">
        </div>
    </div>
    <div class="form-group row">
        <label for="receipt_series" class="col-sm-2 col-form-label">serie de recibo(stock)</label>
        <div class="col-sm-10">
                <input type="text" class="form-control" name="receipt_series" id="receipt_series" placeholder="Ingresa la serie del recibo">
        </div>
    <div>
    </div class="form-group row">
        <label for="receipt_number">Numero del recibo</label>
        <div class="col-sm-10">
            <textarea class="form-control" name="receipt_number" id="receipt_number"></textarea>
      <div>  </div>
    </div>
    <div class="form-group row">
        <label for="date">Fecha</label>
        <div class="col-sm-10">
            <select class="form-control" name="date" id="date">
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="tax">impuesto</label>
        <div class="col-sm-10">
            <select class="form-control" name="tax" id="tax">
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="total">Total</label>
        <div class="col-sm-10">
            <select class="total" name="state" id="total">
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="status">Estado</label>
        <div class="col-sm-10">
            <select class="form-control" name="state" id="state">
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="created_at">Creado</label>
        <div class="col-sm-10">
            <select class="form-control" name="created_at" id="created_at">
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="update_at">Actualizacion</label>
        <div class="col-sm-10">
            <select class="form-control" name="update_at" id="update_at">
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
           <button type="submit" class="btn btn-success">Registrar</button>
           <a href="{{url('dashboard/category')}}" class="btn btn-secondary">Regresar</a>
        </div>
    </div>
  </form>  
</div>

@endsection