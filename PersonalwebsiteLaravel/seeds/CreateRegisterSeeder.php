<?php

use Illuminate\Database\Seeder;
use App\User;

class CreateRegisterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $register = [
            [
               'name'=>'Admin',
               'email'=>'admin@webpage.com',
                'is_admin'=>'1',
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'User',
               'email'=>'user@gmail.com',
                'is_admin'=>'0',
               'password'=> bcrypt('12345678'),
            ],
        ];
  
        foreach ($register as $key => $value) {
            Register::create($value);
        }
    }
}
