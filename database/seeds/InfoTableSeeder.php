<?php

use Illuminate\Database\Seeder;

class InfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /*DB::table('infos')->insert([
            'date' => '2016-01-01',
            'title'=> 'procedimientos y fechas',
            'infoType' => 'DOCUMENT',
            'url'=> '/documentos/procedimientos.pdf',
            'description' =>'procedimientos y fehcas psa'
        ]);

        DB::table('infos')->insert([
            'date' => '2016-01-01',
            'title'=> 'requisitos',
            'infoType' => 'DOCUMENT',
            'url'=> '/documentos/requisitos.pdf',
            'description' =>'requisitos psa'
        ]);

        DB::table('infos')->insert([
            'date' => '2016-01-01',
            'title'=> 'carreras ofertadas',
            'infoType' => 'DOCUMENT',
            'url'=> '/documentos/carrerasOfertadas.pdf',
            'description' =>'carreras ofertadas psa'
        ]);

        DB::table('infos')->insert([
            'date' => '2016-01-01',
            'title'=> 'ponderaciones psa',
            'infoType' => 'DOCUMENT',
            'url'=> '/documentos/ponderaciones.pdf',
            'description' =>'ponderaciones psa'
        ]);

        DB::table('infos')->insert([
            'date' => '2016-01-01',
            'title'=> 'coordinadores banco de preguntas',
            'infoType' => 'DOCUMENT',
            'url'=> '/documentos/coordinadores.pdf',
            'description' =>'coordinadores psa banco de preguntas'
        ]);

        DB::table('infos')->insert([
            'date' => '2016-01-01',
            'title'=> 'plano ciudad universitaria',
            'infoType' => 'IMAGE',
            'url'=> '/documentos/plano.jpeg',
            'description' =>'plano ciudad universitaria'
        ]);*/
        DB::table('infos')->insert([
            'date' => '2016-01-01',
            'title'=> 'prueba',
            'infoType' => 'DOCUMENT',
            'url'=> '/documentos/jk.pdf',
            'description' =>'prueba'
        ]);
    }
}
