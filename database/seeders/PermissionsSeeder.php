<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permisos=[
            //table article
            "ver-Article",
            "Crear-Article",
            "Editar-Article",
            "Eliminar-Article",
            //table category
            "ver-Categoria",
            "Crear-Categoria",
            "Editar-Categoria",
            "Eliminar-Categoria",
            //table Incomedetail
            "ver-IngresoDetalle",
            "Crear-IngresoDetalle", 
            "Editar-IngresoDetalle",
            "Eliminar-IngresoDetalle",
             //table Income
             "ver-Ingreso",
             "Crear-Ingreso", 
             "Editar-Ingreso",
             "Eliminar-Ingreso",
             //table People
             "ver-Personas",
             "Crear-Personas", 
             "Editar-Personas",
             "Eliminar-Personas",
              //table Saledetail
              "ver-VentaDetalle",
              "Crear-VentaDetalle", 
              "Editar-VentaDetalle",
              "Eliminar-VentaDetalle",
             //table Sale
             "ver-Venta",
             "Crear-Venta", 
             "Editar-Venta",
             "Eliminar-Venta",
              //table User
              "ver-Usuario",
              "Crear-Usuario", 
              "Editar-Usuario",
              "Eliminar-Usuario",
        ];
    }
}
 