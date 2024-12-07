<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Roles') }}
        </h2>
    </x-slot>
    <form action="{{route('role.store')}}"method="post">
        @csrf
        <div>
            <label for='name'>Nombre del Rol</label>
            <div>
                <input type="text" name="name" id="name ">
            </div>
        </div>
        <div>
             <label for="permissions">Permisos del Rol</label>
        </div>
        <div>
            <table>
                 <tbody>
                     @foreach ($permission  as $id=>$permission)
                     <tr>
                        <td>
                            <input type="checkbox" name="permission[]" value="{{ $id }}" >
                            {{$permission }}
                        </td>
                     </tr>
                         
                     @endforeach
                 </tbody>
            </table>
            <div>
                <button type="submit"> Guardar</button> 
                <a href="{{url('role')}}">Cancelar</a>
            </div>
        </div>
    </form>
     
</x-app-layout>