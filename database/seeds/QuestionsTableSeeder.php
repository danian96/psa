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
                'code'  =>  'code'.$index,
                'questionType'  =>  'CLOSED',
                'text'  =>  'Este es el texto de la pregunta '.$index.' y es una pregunta CLOSED',
                'management_id' =>  '1',
                'area_id'       =>  '1',
                'subject_id'    =>  '1'
            ]);
        }
        foreach (range(1, 10) as $index) {
            DB::table('questions')->insert ([
                'code'  =>  'code'.($index + 20),
                'questionType'  =>  'OPENED',
                'text'  =>  'Este es el texto de la pregunta '.($index + 20).' y es una pregunta OPENED',
                'management_id' =>  '1',
                'area_id'       =>  '1',
                'subject_id'    =>  '1'
            ]);
        }

        // area 100 fisica
        foreach (range(1, 20) as $index) {
            DB::table('questions')->insert ([
                'code'  =>  'code'.(30 + $index),
                'questionType'  =>  'CLOSED',
                'text'  =>  'Este es el texto de la pregunta '.(30 + $index).' y es una pregunta CLOSED',
                'management_id' =>  '1',
                'area_id'       =>  '1',
                'subject_id'    =>  '2'
            ]);
        }
        foreach (range(1, 10) as $index) {
            DB::table('questions')->insert ([
                'code'  =>  'code'.($index + 50),
                'questionType'  =>  'OPENED',
                'text'  =>  'Este es el texto de la pregunta '.($index + 50).' y es una pregunta OPENED',
                'management_id' =>  '1',
                'area_id'       =>  '1',
                'subject_id'    =>  '2'
            ]);
        }

        // area 100 quimica
        foreach (range(1, 20) as $index) {
            DB::table('questions')->insert ([
                'code'  =>  'code'.(60 + $index),
                'questionType'  =>  'CLOSED',
                'text'  =>  'Este es el texto de la pregunta '.(60 + $index).' y es una pregunta CLOSED',
                'management_id' =>  '1',
                'area_id'       =>  '1',
                'subject_id'    =>  '3'
            ]);
        }
        foreach (range(1, 10) as $index) {
            DB::table('questions')->insert ([
                'code'  =>  'code'.($index + 80),
                'questionType'  =>  'OPENED',
                'text'  =>  'Este es el texto de la pregunta '.($index + 80).' y es una pregunta OPENED',
                'management_id' =>  '1',
                'area_id'       =>  '1',
                'subject_id'    =>  '3'
            ]);
        }

        // area 100 lenguaje
        foreach (range(1, 20) as $index) {
            DB::table('questions')->insert ([
                'code'  =>  'code'.(90 + $index),
                'questionType'  =>  'CLOSED',
                'text'  =>  'Este es el texto de la pregunta '.(90 + $index).' y es una pregunta CLOSED',
                'management_id' =>  '1',
                'area_id'       =>  '1',
                'subject_id'    =>  '4'
            ]);
        }
        foreach (range(1, 10) as $index) {
            DB::table('questions')->insert ([
                'code'  =>  'code'.($index + 110),
                'questionType'  =>  'OPENED',
                'text'  =>  'Este es el texto de la pregunta '.($index + 110).' y es una pregunta OPENED',
                'management_id' =>  '1',
                'area_id'       =>  '1',
                'subject_id'    =>  '4'
            ]);
        }

        // area 501 computacion
        foreach (range(1, 20) as $index) {
            DB::table('questions')->insert ([
                'code'  =>  'code'.(120 + $index),
                'questionType'  =>  'CLOSED',
                'text'  =>  'Este es el texto de la pregunta '.(120 + $index).' y es una pregunta CLOSED',
                'management_id' =>  '1',
                'area_id'       =>  '5',
                'subject_id'    =>  '5'
            ]);
        }
        foreach (range(1, 10) as $index) {
            DB::table('questions')->insert ([
                'code'  =>  'code'.($index + 140),
                'questionType'  =>  'OPENED',
                'text'  =>  'Este es el texto de la pregunta '.($index + 140).' y es una pregunta OPENED',
                'management_id' =>  '1',
                'area_id'       =>  '5',
                'subject_id'    =>  '5'
            ]);
        }

        // area 501 ingles
        foreach (range(1, 20) as $index) {
            DB::table('questions')->insert ([
                'code'  =>  'code'.(150 + $index),
                'questionType'  =>  'CLOSED',
                'text'  =>  'Este es el texto de la pregunta '.(150 + $index).' y es una pregunta CLOSED',
                'management_id' =>  '1',
                'area_id'       =>  '5',
                'subject_id'    =>  '6'
            ]);
        }
        foreach (range(1, 10) as $index) {
            DB::table('questions')->insert ([
                'code'  =>  'code'.($index + 170),
                'questionType'  =>  'OPENED',
                'text'  =>  'Este es el texto de la pregunta '.($index + 170).' y es una pregunta OPENED',
                'management_id' =>  '1',
                'area_id'       =>  '5',
                'subject_id'    =>  '6'
            ]);
        }

        // area 501 mate
        foreach (range(1, 20) as $index) {
            DB::table('questions')->insert ([
                'code'  =>  'code'.(180 + $index),
                'questionType'  =>  'CLOSED',
                'text'  =>  'Este es el texto de la pregunta '.(180 + $index).' y es una pregunta CLOSED',
                'management_id' =>  '1',
                'area_id'       =>  '5',
                'subject_id'    =>  '1'
            ]);
        }
        foreach (range(1, 10) as $index) {
            DB::table('questions')->insert ([
                'code'  =>  'code'.($index + 200),
                'questionType'  =>  'OPENED',
                'text'  =>  'Este es el texto de la pregunta '.($index + 200).' y es una pregunta OPENED',
                'management_id' =>  '1',
                'area_id'       =>  '5',
                'subject_id'    =>  '1'
            ]);
        }

        // area 501 fisica
        foreach (range(1, 20) as $index) {
            DB::table('questions')->insert ([
                'code'  =>  'code'.(210 + $index),
                'questionType'  =>  'CLOSED',
                'text'  =>  'Este es el texto de la pregunta '.(210 + $index).' y es una pregunta CLOSED',
                'management_id' =>  '1',
                'area_id'       =>  '5',
                'subject_id'    =>  '2'
            ]);
        }
        foreach (range(1, 10) as $index) {
            DB::table('questions')->insert ([
                'code'  =>  'code'.($index + 230),
                'questionType'  =>  'OPENED',
                'text'  =>  'Este es el texto de la pregunta '.($index + 230).' y es una pregunta OPENED',
                'management_id' =>  '1',
                'area_id'       =>  '5',
                'subject_id'    =>  '2'
            ]);
        }

    }
}
