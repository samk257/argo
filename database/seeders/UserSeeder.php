<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            'name'=>'kusa',
            'nom'=>'Kubuntu',
            'prenom'=>'Sampras',
            'email'=>'kubuntusampras.sk@gmail.com',
            'address'=>'Bujumbura-Mairie',
            'password'=>Hash::make("12345678"),
            'role'=>'ADMNISTRATEUR',
            'created_at'=>now(),
        ]);
    }
}
