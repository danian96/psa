<?php

use Illuminate\Database\Seeder;

class InfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('infos')->insert([
            'date' => '2017-01-02',
            'title' => 'procedimientos y fechas',
            'infoType' => 'TEXT',
            'url' => 'text/p1.txt',
            'description' => 'procedimientos y fechas diversas de la presente gestion',
            'management_id' => '1',
        ]);
    }
}
