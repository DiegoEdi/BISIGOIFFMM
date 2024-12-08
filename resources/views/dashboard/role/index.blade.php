@extends('dashboard.master')
@section('titulo','Personas')
@section('contenido')
<x-app-layout> 
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Roles') }}
        </h2>
    </x-slot>
    <div>
        <a href="{{ url('dashboard/role/create') }}" style="color: white;">Nuevo Rol</a>
    </div>    
    <div class="container py-4">
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>Rol</th>
                <th>Permisos</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $rol)
                <tr>
                    <td>{{ $rol->name }}</td>
                    <td>
                        @forelse ($rol->permissions as $permission)
                            <span>{{ $permission->name }}</span>
                        @empty
                            <span>No Tiene Permisos Asignados.</span>
                        @endforelse
                    </td>
                    <td>
                        <a href="{{ url('dashboard/role/'.$rol->id.'/edit') }}">Editar</a>
                    </td>
                    <td>
                        <form action="{{ url('dashboard/role/'.$rol->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</x-app-layout>
