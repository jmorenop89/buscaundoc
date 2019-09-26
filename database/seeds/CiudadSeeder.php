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
                        ),
                array(

                           'nombre'=>"Chiclayo",

                        ),
                array(

                            'nombre'=>"Lima",
                        )
            ]
        );
    }
}
