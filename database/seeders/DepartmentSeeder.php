<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::create([
            'name' =>  'GERENCIA GENERAL DE TECNOLOGIA'
        ]);
        
        Department::create([
            'name' =>  'GERENCIA GENERAL DE RRHH'
        ]);

       
    }
}
