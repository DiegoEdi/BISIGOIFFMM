<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight" style="color: white;">
            {{ __('Roles') }}
        </h2>
    </x-slot>
    
    <form action="{{ route('role.store') }}" method="post">
        @csrf
        <div style="color: white;">
            <label for="name">Nombre del Rol</label>
            <div>
                <input type="text" name="name" id="name">
            </div>
        </div>
        
        <div style="color: white;">
            <label for="permissions">Permisos del Rol</label>
        </div>
        
        <div style="color: white;">
            <table style="color: white;">
                <tbody>
                    @foreach ($permission as $id => $permission)
                    <tr>
                        <td>
                            <input type="checkbox" name="permission[]" value="{{ $id }}">
                            {{$permission}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
            <div>
                <button type="submit" style="color: white;">Guardar</button>
                <a href="{{ url('dashboard/role') }}" style="color: white;">Cancelar</a>
            </div>
        </div>
    </form>
</x-app-layout>
