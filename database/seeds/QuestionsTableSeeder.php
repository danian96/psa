<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // area 100 mate
        foreach (range(1, 20) as $index) {
            DB::table('questions')->insert ([
                'code'  =>  'code'.($index),
                'questionType'  =>  'CLOSED',
                'text'  =>  'Este es el texto de la pregunta '.$index.' y es una pregunta CLOSED',
                'management_id' =>  '1',
                'area_id'       =>  '100',
                'subject_id'    =>  '147'
            ]);
        }
        foreach (range(1, 5) as $index) {
            DB::table('questions')->insert ([
                'code'  =>  'code'.$index,
                'questionType'  =>  'CLOSED',
                'text'  =>  'Este es el texto de la pregunta '.$index.' y es una pregunta CLOSED',
                'image'         =>  'assets/images/questionImg'.$index.'jpg',
                'management_id' =>  '1',
                'area_id'       =>  '100',
                'subject_id'    =>  '147'
            ]);
        }

        // area 100 fisica
        foreach (range(1, 20) as $index) {
            DB::table('questions')->insert ([
                'code'  =>  'code'.(30 + $index),
                'questionType'  =>  'CLOSED',
                'text'  =>  'Este es el texto de la pregunta '.(30 + $index).' y es una pregunta CLOSED',
                'management_id' =>  '1',
                'area_id'       =>  '100',
                'subject_id'    =>  '145'
            ]);
        }
        foreach (range(1, 5) as $index) {
            DB::table('questions')->insert ([
                'code'  =>  'code'.$index,
                'questionType'  =>  'CLOSED',
                'text'  =>  'Este es el texto de la pregunta '.$index.' y es una pregunta CLOSED',
                'image'         =>  'assets/images/questionImg'.$index.'jpg',
                'management_id' =>  '1',
                'area_id'       =>  '100',
                'subject_id'    =>  '145'
            ]);
        }

        // area 100 quimica
        foreach (range(1, 20) as $index) {
            DB::table('questions')->insert ([
                'code'  =>  'code'.(60 + $index),
                'questionType'  =>  'CLOSED',
                'text'  =>  'Este es el texto de la pregunta '.(60 + $index).' y es una pregunta CLOSED',
                'management_id' =>  '1',
                'area_id'       =>  '100',
                'subject_id'    =>  '148'
            ]);
        }
        foreach (range(1, 5) as $index) {
            DB::table('questions')->insert ([
                'code'  =>  'code'.$index,
                'questionType'  =>  'CLOSED',
                'text'  =>  'Este es el texto de la pregunta '.$index.' y es una pregunta CLOSED',
                'image'         =>  'assets/images/questionImg'.$index.'jpg',
                'management_id' =>  '1',
                'area_id'       =>  '100',
                'subject_id'    =>  '148'
            ]);
        }

        // area 100 lenguaje
        foreach (range(1, 20) as $index) {
            DB::table('questions')->insert ([
                'code'  =>  'code'.(90 + $index),
                'questionType'  =>  'CLOSED',
                'text'  =>  'Este es el texto de la pregunta '.(90 + $index).' y es una pregunta CLOSED',
                'management_id' =>  '1',
                'area_id'       =>  '100',
                'subject_id'    =>  '146'
            ]);
        }
        foreach (range(1, 5) as $index) {
            DB::table('questions')->insert ([
                'code'  =>  'code'.$index,
                'questionType'  =>  'CLOSED',
                'text'  =>  'Este es el texto de la pregunta '.$index.' y es una pregunta CLOSED',
                'image'         =>  'assets/images/questionImg'.$index.'jpg',
                'management_id' =>  '1',
                'area_id'       =>  '100',
                'subject_id'    =>  '146'
            ]);
        }

        // area 501 computacion
        foreach (range(1, 20) as $index) {
            DB::table('questions')->insert ([
                'code'  =>  'code'.(120 + $index),
                'questionType'  =>  'CLOSED',
                'text'  =>  'Este es el texto de la pregunta '.(120 + $index).' y es una pregunta CLOSED',
                'management_id' =>  '1',
                'area_id'       =>  '501',
                'subject_id'    =>  '163'
            ]);
        }
        foreach (range(1, 5) as $index) {
            DB::table('questions')->insert ([
                'code'  =>  'code'.$index,
                'questionType'  =>  'CLOSED',
                'text'  =>  'Este es el texto de la pregunta '.$index.' y es una pregunta CLOSED',
                'image'         =>  'assets/images/questionImg'.$index.'jpg',
                'management_id' =>  '1',
                'area_id'       =>  '501',
                'subject_id'    =>  '163'
            ]);
        }

        // area 501 ingles
        foreach (range(1, 20) as $index) {
            DB::table('questions')->insert ([
                'code'  =>  'code'.(150 + $index),
                'questionType'  =>  'CLOSED',
                'text'  =>  'Este es el texto de la pregunta '.(150 + $index).' y es una pregunta CLOSED',
                'management_id' =>  '1',
                'area_id'       =>  '501',
                'subject_id'    =>  '162'
            ]);
        }
        foreach (range(1, 5) as $index) {
            DB::table('questions')->insert ([
                'code'  =>  'code'.$index,
                'questionType'  =>  'CLOSED',
                'text'  =>  'Este es el texto de la pregunta '.$index.' y es una pregunta CLOSED',
                'image'         =>  'assets/images/questionImg'.$index.'jpg',
                'management_id' =>  '1',
                'area_id'       =>  '501',
                'subject_id'    =>  '162'
            ]);
        }

        // area 501 mate
        foreach (range(1, 20) as $index) {
            DB::table('questions')->insert ([
                'code'  =>  'code'.(180 + $index),
                'questionType'  =>  'CLOSED',
                'text'  =>  'Este es el texto de la pregunta '.(180 + $index).' y es una pregunta CLOSED',
                'management_id' =>  '1',
                'area_id'       =>  '501',
                'subject_id'    =>  '164'
            ]);
        }
        foreach (range(1, 5) as $index) {
            DB::table('questions')->insert ([
                'code'  =>  'code'.$index,
                'questionType'  =>  'CLOSED',
                'text'  =>  'Este es el texto de la pregunta '.$index.' y es una pregunta CLOSED',
                'image'         =>  'assets/images/questionImg'.$index.'jpg',
                'management_id' =>  '1',
                'area_id'       =>  '501',
                'subject_id'    =>  '164'
            ]);
        }

        // area 501 fisica
        foreach (range(1, 20) as $index) {
            DB::table('questions')->insert ([
                'code'  =>  'code'.(210 + $index),
                'questionType'  =>  'CLOSED',
                'text'  =>  'Este es el texto de la pregunta '.(210 + $index).' y es una pregunta CLOSED',
                'management_id' =>  '1',
                'area_id'       =>  '501',
                'subject_id'    =>  '161'
            ]);
        }
        foreach (range(1, 5) as $index) {
            DB::table('questions')->insert ([
                'code'  =>  'code'.$index,
                'questionType'  =>  'CLOSED',
                'text'  =>  'Este es el texto de la pregunta '.$index.' y es una pregunta CLOSED',
                'image'         =>  'assets/images/questionImg'.$index.'jpg',
                'management_id' =>  '1',
                'area_id'       =>  '501',
                'subject_id'    =>  '161'
            ]);
        }

    }
}
