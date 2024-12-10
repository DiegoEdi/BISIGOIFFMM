<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-white">
            {{ __('Roles') }}
        </h2>
    </x-slot>

    <form action="{{ route('role.update', $role->id) }}" method="post">
        @csrf
        @method('PUT')

        <div class="text-white mb-4">
            <label for="name" class="block text-white">Nombre del Rol</label>
            <div>
                <input type="text" name="name" id="name" value="{{ old('name', $role->name) }}" class="input-text" style="color: black; width: 100%; padding: 8px; border-radius: 4px;">
            </div>
        </div>

        <div class="text-white mb-4">
            <label for="permissions" class="block text-white">Permisos del Rol</label>
        </div>
        
        <div class="text-white">
            <table class="table-auto w-full text-white">
                <tbody>
                    @foreach ($permission as $id => $permission)
                        <tr>
                            <td class="p-2"> 
                                <input type="checkbox" name="permission[]" value="{{ $id }}"
                                    {{ in_array($id, $role->permissions->pluck('id')->toArray()) ? 'checked' : '' }}
                                    class="mr-2"
                                >
                                {{$permission}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="text-white mt-4">
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Guardar</button> 
            <a href="{{ url('dashboard/role') }}" class="bg-gray-500 text-white py-2 px-4 rounded-md hover:bg-gray-600">Cancelar</a>
        </div>
    </form>
</x-app-layout>
