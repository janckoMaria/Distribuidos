<?php

use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'ci'=>'21345678',
            'nombres'=>'Gabriel',
            'apellidos'=>'Mamani Catro',
            'direccion'=>'Calle Potosi n°23',
            'telefono'=>'71812345',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
    }
}
