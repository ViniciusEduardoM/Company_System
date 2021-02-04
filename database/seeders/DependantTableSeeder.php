<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use DB;

class DependantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dependants')->insert([
            'name' => 'George Casey',
            'address' => 'Rua Joaquim Fonseca',
            'kinship' => 'Filho',
            'employee_id' => 2,
        ]);

        DB::table('dependants')->insert([
            'name' => 'Carolina QualQuerNome',
            'address' => 'Rua Ferreira TangoTango',
            'kinship' => 'Filha',
            'employee_id' => 4,
        ]);

        DB::table('dependants')->insert([
            'name' => 'Francisco Timbacanto',
            'address' => 'Avenida Tanto Faz',
            'kinship' => 'Esposo',
            'employee_id' => 3,
        ]);

        DB::table('dependants')->insert([
            'name' => 'Catarina do GTA',
            'address' => 'Trailer nas Montanhas',
            'kinship' => 'Esposa',
            'employee_id' => 5,
        ]);

        DB::table('dependants')->insert([
            'name' => 'Carl Jonhson',
            'address' => 'Groove Street',
            'kinship' => 'Filho',
            'employee_id' => 1,
        ]);

        DB::table('dependants')->insert([
            'name' => 'Eve Polidampo',
            'address' => 'Avenida Ragatanga',
            'kinship' => 'Filha',
            'employee_id' => 7,
        ]);

        DB::table('dependants')->insert([
            'name' => 'Big Smoke',
            'address' => 'Traidor home',
            'kinship' => 'Filho',
            'employee_id' => 9,
        ]);

        DB::table('dependants')->insert([
            'name' => 'Tsu',
            'address' => 'Rua Oculta da Folha',
            'kinship' => 'Esposa',
            'employee_id' => 2,
        ]);

        DB::table('dependants')->insert([
            'name' => 'Beltinho',
            'address' => 'Avenida Lindos',
            'kinship' => 'Filho',
            'employee_id' => 5,
        ]);

        DB::table('dependants')->insert([
            'name' => 'Vanessa Carlton',
            'address' => 'A Thousand Miles',
            'kinship' => 'Filha',
            'employee_id' => 6,
        ]);

    }
}
