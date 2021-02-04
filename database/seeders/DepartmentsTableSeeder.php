<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use DB;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            'name' => 'Departamento A',
            'location' => 'Prédio 1',
        ]);
        
        DB::table('departments')->insert([
            'name' => 'Departamento B',
            'location' => 'Prédio 2',
        ]);

        DB::table('departments')->insert([
            'name' => 'Departamento C',
            'location' => 'Prédio 3',
        ]);
        DB::table('departments')->insert([
            'name' => 'Departamento D',
            'location' => 'Prédio 4',
        ]);
        DB::table('departments')->insert([
            'name' => 'Departamento E',
            'location' => 'Prédio 5',
        ]);
    }
}
