<?php

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;
use Illuminate\support\Facades\Hash;

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
        DB::table('Users')->insert([
        	'name'=>'peter peter',
        	'email'=>"peter@gmail.com",
        	"password"=>Hash::make('1234')

        ]); 
    }
}
