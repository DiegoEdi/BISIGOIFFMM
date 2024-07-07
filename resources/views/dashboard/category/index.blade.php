@extends('dashboard.master')
@section('titulo','Categorias')
@include('layouts/navigation')
@section('contenido')
<main>
    <div>
    <h1>Litado de Categorias</h1>
    <br>
    <a href="{{url('dashboard/category/create')}}" class="btn btn-primary btn-sm">Nueva Categoria</a>
    <div>
         
</main>
@endsection 