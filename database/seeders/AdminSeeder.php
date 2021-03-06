<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('admins')->insert(
            [
                'name'=>'admin1',
                'email'=>'admin1@gmail.com',
                'password'=>('123')
            ],
            [
                'name'=>'admin2',
                'email'=>'admin2@gmail.com',
                'password'=>Hash::make('12345')
            ],

        );

    }
}
