<?php

use Illuminate\Database\Seeder;

class OptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // area 100 mate
        foreach (range(1, 25) as $index) {
            foreach (range(1, 4) as $i){
                DB::table('options')->insert ([
                    'code'  =>  'codeAns-'.$index.'-'.$i,
                    'text'  =>  'Este es el texto de la opcion '.$index.'-'.$i,
                    'image' =>  'image '.$index.'-'.$i,
                    'answer'=>  false,
                    'question_id' =>  (5580 + $index),
                ]);
            }
            DB::table('options')->insert ([
                'code'  =>  'codeAns-'.$index.'-5',
                'text'  =>  'Este es el texto de la opcion '.$index.'-5',
                'image' =>  'image '.$index.'-5',
                'answer'=>  true,
                'question_id' =>  (5580 + $index),
            ]);
        }


        // area 100 fisica
        foreach (range(1, 25) as $index) {
            DB::table('options')->insert ([
                'code'  =>  'codeAns-'.(30 + $index).'-1',
                'text'  =>  'Este es el texto de la opcion '.(30 + $index).'-1',
                'image' =>  'image '.(30 + $index).'-1',
                'answer'=>  true,
                'question_id' =>  (5580 + $index + 25),
            ]);
            foreach (range(2, 5) as $i){
                DB::table('options')->insert ([
                    'code'  =>  'codeAns-'.(30 + $index).'-'.$i,
                    'text'  =>  'Este es el texto de la opcion '.(30 + $index).'-'.$i,
                    'image' =>  'image '.(30 + $index).'-'.$i,
                    'answer'=>  false,
                    'question_id' =>  (5580 + $index + 25),
                ]);
            }
        }

        // area 100 quimica
        foreach (range(1, 25) as $index) {
            DB::table('options')->insert ([
                'code'  =>  'codeAns-'.(60 + $index).'-1',
                'text'  =>  'Este es el texto de la opcion '.(60 + $index).'-1',
                'image' =>  'image '.(60 + $index).'-1',
                'answer'=>  false,
                'question_id' =>  (5580 + $index + 50),
            ]);
            DB::table('options')->insert ([
                'code'  =>  'codeAns-'.(60 + $index).'-2',
                'text'  =>  'Este es el texto de la opcion '.(60 + $index).'-2',
                'image' =>  'image '.(60 + $index).'-2',
                'answer'=>  true,
                'question_id' =>  (5580 + $index + 50),
            ]);
            DB::table('options')->insert ([
                'code'  =>  'codeAns-'.(60 + $index).'-1',
                'text'  =>  'Este es el texto de la opcion '.(60 + $index).'-1',
                'image' =>  'image '.(60 + $index).'-1',
                'answer'=>  false,
                'question_id' =>  (5580 + $index + 50),
            ]);
        }

        // area 100 lenguaje

        foreach (range(1, 25) as $index) {
            foreach (range(1, 4) as $i){
                DB::table('options')->insert ([
                    'code'  =>  'codeAns-'.(90 + $index).'-'.$i,
                    'text'  =>  'Este es el texto de la opcion '.(90 + $index).'-'.$i,
                    'image' =>  'image '.(90 + $index).'-'.$i,
                    'answer'=>  false,
                    'question_id' =>  (5580 + $index + 75),
                ]);
            }
            DB::table('options')->insert ([
                'code'  =>  'codeAns-'.(90 + $index).'-5',
                'text'  =>  'Este es el texto de la opcion '.(90 + $index).'-5',
                'image' =>  'image '.(90 + $index).'-5',
                'answer'=>  true,
                'question_id' =>  (5580 + $index + 75),
            ]);
        }

        // area 501 computacion
        foreach (range(1, 25) as $index) {
            foreach (range(1, 4) as $i){
                DB::table('options')->insert ([
                    'code'  =>  'codeAns-'.(120 + $index).'-'.$i,
                    'text'  =>  'Este es el texto de la opcion '.(120 + $index).'-'.$i,
                    'image' =>  'image '.(120 + $index).'-'.$i,
                    'answer'=>  false,
                    'question_id' =>  (5580 + $index + 100),
                ]);
            }
            DB::table('options')->insert ([
                'code'  =>  'codeAns-'.(120 + $index).'-5',
                'text'  =>  'Este es el texto de la opcion '.(120 + $index).'-5',
                'image' =>  'image '.(120 + $index).'-5',
                'answer'=>  true,
                'question_id' =>  (5580 + $index + 100),
            ]);
        }

        // area 501 ingles
        foreach (range(1, 25) as $index) {
            DB::table('options')->insert ([
                'code'  =>  'codeAns-'.(150 + $index).'-1',
                'text'  =>  'Este es el texto de la opcion '.(150 + $index).'-1',
                'image' =>  'image '.(150 + $index).'-1',
                'answer'=>  true,
                'question_id' =>  (5580 + $index + 125),
            ]);
            foreach (range(2, 5) as $i){
                DB::table('options')->insert ([
                    'code'  =>  'codeAns-'.(150 + $index).'-'.$i,
                    'text'  =>  'Este es el texto de la opcion '.(150 + $index).'-'.$i,
                    'image' =>  'image '.(150 + $index).'-'.$i,
                    'answer'=>  false,
                    'question_id' =>  (5580 + $index + 125),
                ]);
            }
        }

        // area 501 mate
        foreach (range(1, 25) as $index) {
            DB::table('options')->insert ([
                'code'  =>  'codeAns-'.(180 + $index).'-1',
                'text'  =>  'Este es el texto de la opcion '.(180 + $index).'-1',
                'image' =>  'image '.(180 + $index).'-1',
                'answer'=>  false,
                'question_id' =>  (5580 + $index + 150),
            ]);
            DB::table('options')->insert ([
                'code'  =>  'codeAns-'.(180 + $index).'-2',
                'text'  =>  'Este es el texto de la opcion '.(180 + $index).'-2',
                'image' =>  'image '.(180 + $index).'-2',
                'answer'=>  true,
                'question_id' =>  (5580 + $index + 150),
            ]);
            DB::table('options')->insert ([
                'code'  =>  'codeAns-'.(180 + $index).'-1',
                'text'  =>  'Este es el texto de la opcion '.(180 + $index).'-1',
                'image' =>  'image '.(180 + $index).'-1',
                'answer'=>  false,
                'question_id' =>  (5580 + $index + 150),
            ]);
        }

        // area 501 fisica

        foreach (range(1, 25) as $index) {
            foreach (range(1, 4) as $i){
                DB::table('options')->insert ([
                    'code'  =>  'codeAns-'.(210 + $index).'-'.$i,
                    'text'  =>  'Este es el texto de la opcion '.(210 + $index).'-'.$i,
                    'image' =>  'image '.(210 + $index).'-'.$i,
                    'answer'=>  false,
                    'question_id' =>  (5580 + $index + 175),
                ]);
            }
            DB::table('options')->insert ([
                'code'  =>  'codeAns-'.(210 + $index).'-5',
                'text'  =>  'Este es el texto de la opcion '.(210 + $index).'-5',
                'image' =>  'image '.(210 + $index).'-5',
                'answer'=>  true,
                'question_id' =>  (5580 + $index + 175),
            ]);
        }

    }
}
