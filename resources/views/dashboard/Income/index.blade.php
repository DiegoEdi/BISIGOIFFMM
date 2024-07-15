@extends('dashboard.master')
@section('titulo','ingresos')
@include('layouts/navigation')
@section('contenido')

<div class="container py-4">
    <h1>Listado de Ingresos</h1>
    <br>
    <a href="{{url('dashboard/article/create')}}"class="btn btn-primary btn-sm">Nuevo ingresos</a>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>Id producto</th>
                <th>Proveedor</th>
                <th>id usuario</th>
                <th>Tipo de recibo</th>
                <th>Serie de recibo</th>
                <th>Numero del recibo</th>
                <th>Fecha</th>
                <th>Impuesto</th>
                <th>total</th>
                <th>Estado</th>
                <th>FechaCreacion</th>
                <th>FechaActualizacion</th>
            </tr>
        </thead>
        <tbody>
            @foreach($income as $income)
            <tr>
                <td scope="row">{{$income->id}}</td>
                <td>{{$income->provider_id}}</td>
                <td>{{$income->user_id}}</td>
                <td>{{$income->receipt_type}}</td>
                <td>{{$income->receipt_series}}</td>
                <td>{{$income->receipt_number}}</td>
                <td>{{$income->date}}</td>
                <td>{{$income->tax}}</td>
                <td>{{$income->total}}</td>
                <td>{{$income->status ?_ ('activo'): _('inactivo')}}</td>
                <td>{{$income->create_at }}</td>
                <td>{{$income->update_at}}</td>
                <td>
                    <a href="{{url('dashboard/article/'.$income->id.'/edit') }}" class="bi bi-pencil"></a>
                </td>
                <td>
                    <form action="{{url('dashboard/article/'.$income->id)}}" method="post">
                        @method("DELETE")
                        @csrf
                        <button class="bi bi-eraser-fill" type="submit" ></button>
                    <form>    
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