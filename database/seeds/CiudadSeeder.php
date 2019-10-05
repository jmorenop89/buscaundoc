<?php

use Illuminate\Database\Seeder;

class CiudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("ciudad")->delete();
        DB::table("ciudad")->insert(
            [
                array(
                    'nombre'=>"Trujillo",
                    'slug' => str_slug('Trujillo')
                ),
                array(
                    'nombre'=>"Chiclayo",
                    'slug' => str_slug('Chiclayo')
                ),
                array(
                    'nombre'=>"Lima",
                    'slug' => str_slug('Lima')
                )
            ]
        );
    }
}
