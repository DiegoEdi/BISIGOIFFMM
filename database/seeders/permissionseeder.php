<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// importamos de spatie
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class permissionseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permisos=[
            //table article
            'Ver-Article',
            'Crear-Aticle',
            'Editar-Article',
            'Eliminar Article',
            //table category
            'Ver-categoria',
            'Crear-categoria',
            'Editar-categoria',
            'Eliminar categoria',
            //table Incomedetail
            'Ver-ingresoDetalle',
            'Crear-ingresodetalle',
            'Editar-ingresoDetalle',
            'Eliminar-ingresodetalle',
             //table Income
             'Ver-ingreso',
             'Crear-ingreso',
             'Editar-ingreso',
             'Eliminar-ingreso',
             //table Person
             'Ver-persona ',
             'Crear-persona ',
             'Editar-persona ',
             'Eliminar-persona ',

        ];
        foreach($permisos as $permiso){
            permission::create(['name'=>$permiso]); 
        }
    }
}
