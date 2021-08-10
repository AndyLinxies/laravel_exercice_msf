<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('formations')->insert([
            [
                'nom_formation'=> 'Coding',
                'description'=>'Apprenez à coder'
            ],
            [
                'nom_formation'=> 'AWS',
                'description'=>'Apprenez Amazon Web Service'
            ],
            [
                'nom_formation'=> 'Digital Marketing',
                'description'=>'Apprenez à Marketer'
            ],
            [
                'nom_formation'=> 'Web master',
                'description'=>'Apprenez à gerer un site'
            ],
            [
                'nom_formation'=> 'Web designer',
                'description'=>' maitrisez UX/UI'
            ],
            [
                'nom_formation'=> 'DevOps',
                'description'=>'Dev et Operations'
            ],
        ]);
    }
}
