<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeformationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('typeformations')->insert([
            [
                'nom_typeformation'=>'Formation longue'
            ],
            [
                'nom_typeformation'=>'Formation courte'
            ],
            [
                'nom_typeformation'=>'Formation a distance'
            ],
            [
                'nom_typeformation'=>'Formation en presenciel'
            ],
            [
                'nom_typeformation'=>'Formation en alternance'
            ],
            [
                'nom_typeformation'=>'Formation temps plein'
            ],
            [
                'nom_typeformation'=>'Formation temps partiel'
            ],
            [
                'nom_typeformation'=>'Formation rémunérée'
            ],
            [
                'nom_typeformation'=>'Formation non rémunérée'
            ],
            [
                'nom_typeformation'=>'Formation continuelle'
            ],
        ]);
    }
}
