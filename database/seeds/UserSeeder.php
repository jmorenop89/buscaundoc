<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("users")->delete();
        DB::table("users")->insert(
            [
                array(

                            'email'=>"admin@mail.com",
                            'password'=>bcrypt("123456789"),
                            'role'=>"admin"
                        ),
                array(

                            'email'=>"eder@mail.com",
                            'password'=>bcrypt("123456789"),
                            'role'=>"paciente"

                        ),
                array(

                            'email'=>"doctor@mail.com",
                            'password'=>bcrypt("123456789"),
                            'role'=>"doctor"

                        )
            ]
        );
    }
}
