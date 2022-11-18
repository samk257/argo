<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Province::insert([
            'name'=>'Bujumbura-Mairie'
        ]);
        Province::insert([
            'name'=>'Bujumbura-Rural'
        ]);
        Province::insert([
            'name'=>'Bubanza'
        ]);
        Province::insert([
            'name'=>'Gitega'
        ]);
        Province::insert([
            'name'=>'Ngozi'
        ]);
        Province::insert([
            'name'=>'Rutana'
        ]);
        Province::insert([
            'name'=>'Makamba'
        ]);
        Province::insert([
            'name'=>'Bururi'
        ]);
        Province::insert([
            'name'=>'Mwaro'
        ]);
        Province::insert([
            'name'=>'Ruyigi'
        ]);
        Province::insert([
            'name'=>'Cankuzo'
        ]);
        Province::insert([
            'name'=>'Kayanza'
        ]);
        Province::insert([
            'name'=>'Cibitoke'
        ]);
        Province::insert([
            'name'=>'Kirundo'
        ]);
        Province::insert([
            'name'=>'Rumonge'
        ]);
    }
}
