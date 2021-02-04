<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use DB;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
    {
        DB::table('employees')->insert([
            'name' => 'Pedro Ferraresi',
            'cpf' => '12345678912',
            'address' => Str::random(15),
            'phone' => '12345678912',
            'salary' => 3000.00,
            'department_id' => 1,
        ]);

        DB::table('employees')->insert([
            'name' => 'Volpato Ferraresi',
            'cpf' => '98765432130',
            'address' => Str::random(15),
            'phone' => '12345678912',
            'salary' => 2000.00,
            'department_id' => 1,
        ]);

        DB::table('employees')->insert([
            'name' => 'Ana Carolina',
            'cpf' => '78913245650',
            'address' => Str::random(15),
            'phone' => '12345678912',
            'salary' => 3000.00,
            'department_id' => 1,
        ]);

        DB::table('employees')->insert([
            'name' => 'Curvina Ubaldo',
            'cpf' => '85274193602',
            'address' => Str::random(15),
            'phone' => '12345678912',
            'salary' => 8000.00,
            'department_id' => 2,
        ]);

        DB::table('employees')->insert([
            'name' => 'Luiz',
            'cpf' => '85236914702',
            'address' => Str::random(15),
            'phone' => '12345678912',
            'salary' => 9000.00,
            'department_id' => 2,
        ]);

        DB::table('employees')->insert([
            'name' => 'Ferraresi',
            'cpf' => '95175345682',
            'address' => Str::random(15),
            'phone' => '12345678912',
            'salary' => 5000.00,
            'department_id' => 2,
        ]);

        DB::table('employees')->insert([
            'name' => 'Ana Laura',
            'cpf' => '75386194232',
            'address' => Str::random(15),
            'phone' => '12345678912',
            'salary' => 2000.00,
            'department_id' => 3,
        ]);

        DB::table('employees')->insert([
            'name' => 'Camila',
            'cpf' => '98732185207',
            'address' => Str::random(15),
            'phone' => '12345678912',
            'salary' => 1000.00,
            'department_id' => 3,
        ]);

        DB::table('employees')->insert([
            'name' => 'João',
            'cpf' => '98732100584',
            'address' => Str::random(15),
            'phone' => '12345678912',
            'salary' => 3000.00,
            'department_id' => 3,
        ]);

    }
}
