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
        DB::table("user")->delete();
        DB::table("user")->insert(
            array(
                'id'=>1,
                'email'=>"admin@mail.com",
                'password'=>bcrypt("123456")
            )
        );
    }
}
