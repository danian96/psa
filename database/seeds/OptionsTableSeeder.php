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
        /*
        foreach (range(1, 20) as $index) {
            foreach (range(1, 4) as $i){
                DB::table('options')->insert ([
                    'code'  =>  'codeAns-'.$index.'-'.$i,
                    'text'  =>  'Este es el texto de la opcion '.$index.'-'.$i,
                    'image' =>  'image '.$index.'-'.$i,
                    'answer'=>  false,
                    'question_id' =>  $index,
                ]);
            }
            DB::table('options')->insert ([
                'code'  =>  'codeAns-'.$index.'-5',
                'text'  =>  'Este es el texto de la opcion '.$index.'-5',
                'image' =>  'image '.$index.'-5',
                'answer'=>  true,
                'question_id' =>  $index,
            ]);
        }

        foreach (range(1, 10) as $index) {
            foreach (range(1, 3) as $i){
                DB::table('options')->insert ([
                    'code'  =>  'codeAns-'.($index + 20).'-'.$i,
                    'text'  =>  'Este es el texto de la opcion '.($index + 20).'-'.$i,
                    'image' =>  'image '.($index + 20).'-'.$i,
                    'answer'=>  false,
                    'question_id' =>  ($index + 20),
                ]);
            }
            DB::table('options')->insert ([
                'code'  =>  'codeAns-'.($index + 20).'-4',
                'text'  =>  'Este es el texto de la opcion '.($index + 20).'-4',
                'image' =>  'image '.($index + 20).'-4',
                'answer'=>  true,
                'question_id' =>  ($index + 20),
            ]);
            DB::table('options')->insert ([
                'code'  =>  'codeAns-'.($index + 20).'-5',
                'text'  =>  'Este es el texto de la opcion '.($index + 20).'-5',
                'image' =>  'image '.($index + 20).'-5',
                'answer'=>  true,
                'question_id' =>  ($index + 20),
            ]);
        }
        
        
        // area 100 fisica
        foreach (range(1, 20) as $index) {
            DB::table('options')->insert ([
                'code'  =>  'codeAns-'.(30 + $index).'-1',
                'text'  =>  'Este es el texto de la opcion '.(30 + $index).'-1',
                'image' =>  'image '.(30 + $index).'-1',
                'answer'=>  true,
                'question_id' =>  (30 + $index),
            ]);
            foreach (range(2, 5) as $i){
                DB::table('options')->insert ([
                    'code'  =>  'codeAns-'.(30 + $index).'-'.$i,
                    'text'  =>  'Este es el texto de la opcion '.(30 + $index).'-'.$i,
                    'image' =>  'image '.(30 + $index).'-'.$i,
                    'answer'=>  false,
                    'question_id' =>  (30 + $index),
                ]);
            }
        }

        foreach (range(1, 10) as $index) {
            DB::table('options')->insert ([
                'code'  =>  'codeAns-'.($index + 50).'-1',
                'text'  =>  'Este es el texto de la opcion '.($index + 50).'-1',
                'image' =>  'image '.($index + 50).'-1',
                'answer'=>  true,
                'question_id' =>  ($index + 50),
            ]);
            foreach (range(2, 3) as $i){
                DB::table('options')->insert ([
                    'code'  =>  'codeAns-'.($index + 50).'-'.$i,
                    'text'  =>  'Este es el texto de la opcion '.($index + 50).'-'.$i,
                    'image' =>  'image '.($index + 50).'-'.$i,
                    'answer'=>  false,
                    'question_id' =>  ($index + 50),
                ]);
            }
            DB::table('options')->insert ([
                'code'  =>  'codeAns-'.($index + 50).'-4',
                'text'  =>  'Este es el texto de la opcion '.($index + 50).'-4',
                'image' =>  'image '.($index + 50).'-4',
                'answer'=>  true,
                'question_id' =>  ($index + 50),
            ]);
        }

        // area 100 quimica
        foreach (range(1, 20) as $index) {
            DB::table('options')->insert ([
                'code'  =>  'codeAns-'.(60 + $index).'-1',
                'text'  =>  'Este es el texto de la opcion '.(60 + $index).'-1',
                'image' =>  'image '.(60 + $index).'-1',
                'answer'=>  false,
                'question_id' =>  (60 + $index),
            ]);
            DB::table('options')->insert ([
                'code'  =>  'codeAns-'.(60 + $index).'-2',
                'text'  =>  'Este es el texto de la opcion '.(60 + $index).'-2',
                'image' =>  'image '.(60 + $index).'-2',
                'answer'=>  true,
                'question_id' =>  (60 + $index),
            ]);
            DB::table('options')->insert ([
                'code'  =>  'codeAns-'.(60 + $index).'-1',
                'text'  =>  'Este es el texto de la opcion '.(60 + $index).'-1',
                'image' =>  'image '.(60 + $index).'-1',
                'answer'=>  false,
                'question_id' =>  (60 + $index),
            ]);
        }

        foreach (range(1, 10) as $index) {
            foreach (range(1, 3) as $i) {
                DB::table('options')->insert ([
                    'code'  =>  'codeAns-'.($index + 80).'-'.$i,
                    'text'  =>  'Este es el texto de la opcion '.($index + 80).'-'.$i,
                    'image' =>  'image '.($index + 80).'-'.$i,
                    'answer'=>  true,
                    'question_id' =>  ($index + 80),
                ]);
            }
            DB::table('options')->insert ([
                'code'  =>  'codeAns-'.($index + 80).'-4',
                'text'  =>  'Este es el texto de la opcion '.($index + 80).'-4',
                'image' =>  'image '.($index + 80).'-4',
                'answer'=>  false,
                'question_id' =>  ($index + 80),
            ]);
        }
        
       // area 100 lenguaje

        foreach (range(1, 20) as $index) {
            foreach (range(1, 4) as $i){
                DB::table('options')->insert ([
                    'code'  =>  'codeAns-'.(90 + $index).'-'.$i,
                    'text'  =>  'Este es el texto de la opcion '.(90 + $index).'-'.$i,
                    'image' =>  'image '.(90 + $index).'-'.$i,
                    'answer'=>  false,
                    'question_id' =>  (90 + $index),
                ]);
            }
            DB::table('options')->insert ([
                'code'  =>  'codeAns-'.(90 + $index).'-5',
                'text'  =>  'Este es el texto de la opcion '.(90 + $index).'-5',
                'image' =>  'image '.(90 + $index).'-5',
                'answer'=>  true,
                'question_id' =>  (90 + $index),
            ]);
        }

        foreach (range(1, 10) as $index) {
            foreach (range(1, 3) as $i){
                DB::table('options')->insert ([
                    'code'  =>  'codeAns-'.($index + 110).'-'.$i,
                    'text'  =>  'Este es el texto de la opcion '.($index + 110).'-'.$i,
                    'image' =>  'image '.($index + 110).'-'.$i,
                    'answer'=>  false,
                    'question_id' =>  ($index + 110),
                ]);
            }
            DB::table('options')->insert ([
                'code'  =>  'codeAns-'.($index + 110).'-4',
                'text'  =>  'Este es el texto de la opcion '.($index + 110).'-4',
                'image' =>  'image '.($index + 110).'-4',
                'answer'=>  true,
                'question_id' =>  ($index + 110),
            ]);
            DB::table('options')->insert ([
                'code'  =>  'codeAns-'.($index + 110).'-5',
                'text'  =>  'Este es el texto de la opcion '.($index + 110).'-5',
                'image' =>  'image '.($index + 110).'-5',
                'answer'=>  true,
                'question_id' =>  ($index + 110),
            ]);
        }
        */

        /////////////////////////////////////////////////////////////////////////////////

        /*
        // area 501 computacion
        foreach (range(1, 20) as $index) {
            foreach (range(1, 4) as $i){
                DB::table('options')->insert ([
                    'code'  =>  'codeAns-'.(120 + $index).'-'.$i,
                    'text'  =>  'Este es el texto de la opcion '.(120 + $index).'-'.$i,
                    'image' =>  'image '.(120 + $index).'-'.$i,
                    'answer'=>  false,
                    'question_id' =>  (120 + $index),
                ]);
            }
            DB::table('options')->insert ([
                'code'  =>  'codeAns-'.(120 + $index).'-5',
                'text'  =>  'Este es el texto de la opcion '.(120 + $index).'-5',
                'image' =>  'image '.(120 + $index).'-5',
                'answer'=>  true,
                'question_id' =>  (120 + $index),
            ]);
        }

        foreach (range(1, 10) as $index) {
            foreach (range(1, 3) as $i){
                DB::table('options')->insert ([
                    'code'  =>  'codeAns-'.($index + 140).'-'.$i,
                    'text'  =>  'Este es el texto de la opcion '.($index + 140).'-'.$i,
                    'image' =>  'image '.($index + 140).'-'.$i,
                    'answer'=>  false,
                    'question_id' =>  ($index + 140),
                ]);
            }
            DB::table('options')->insert ([
                'code'  =>  'codeAns-'.($index + 140).'-4',
                'text'  =>  'Este es el texto de la opcion '.($index + 140).'-4',
                'image' =>  'image '.($index + 140).'-4',
                'answer'=>  true,
                'question_id' =>  ($index + 140),
            ]);
            DB::table('options')->insert ([
                'code'  =>  'codeAns-'.($index + 140).'-5',
                'text'  =>  'Este es el texto de la opcion '.($index + 140).'-5',
                'image' =>  'image '.($index + 140).'-5',
                'answer'=>  true,
                'question_id' =>  ($index + 140),
            ]);
        }

        // area 501 ingles
        foreach (range(1, 20) as $index) {
            DB::table('options')->insert ([
                'code'  =>  'codeAns-'.(150 + $index).'-1',
                'text'  =>  'Este es el texto de la opcion '.(150 + $index).'-1',
                'image' =>  'image '.(150 + $index).'-1',
                'answer'=>  true,
                'question_id' =>  (150 + $index),
            ]);
            foreach (range(2, 5) as $i){
                DB::table('options')->insert ([
                    'code'  =>  'codeAns-'.(150 + $index).'-'.$i,
                    'text'  =>  'Este es el texto de la opcion '.(150 + $index).'-'.$i,
                    'image' =>  'image '.(150 + $index).'-'.$i,
                    'answer'=>  false,
                    'question_id' =>  (150 + $index),
                ]);
            }
        }

        foreach (range(1, 10) as $index) {
            DB::table('options')->insert ([
                'code'  =>  'codeAns-'.($index + 170).'-1',
                'text'  =>  'Este es el texto de la opcion '.($index + 170).'-1',
                'image' =>  'image '.($index + 170).'-1',
                'answer'=>  true,
                'question_id' =>  ($index + 170),
            ]);
            foreach (range(2, 3) as $i){
                DB::table('options')->insert ([
                    'code'  =>  'codeAns-'.($index + 170).'-'.$i,
                    'text'  =>  'Este es el texto de la opcion '.($index + 170).'-'.$i,
                    'image' =>  'image '.($index + 170).'-'.$i,
                    'answer'=>  false,
                    'question_id' =>  ($index + 170),
                ]);
            }
            DB::table('options')->insert ([
                'code'  =>  'codeAns-'.($index + 170).'-4',
                'text'  =>  'Este es el texto de la opcion '.($index + 170).'-4',
                'image' =>  'image '.($index + 170).'-4',
                'answer'=>  true,
                'question_id' =>  ($index + 170),
            ]);
        }

        // area 501 mate
        foreach (range(1, 20) as $index) {
            DB::table('options')->insert ([
                'code'  =>  'codeAns-'.(180 + $index).'-1',
                'text'  =>  'Este es el texto de la opcion '.(180 + $index).'-1',
                'image' =>  'image '.(180 + $index).'-1',
                'answer'=>  false,
                'question_id' =>  (180 + $index),
            ]);
            DB::table('options')->insert ([
                'code'  =>  'codeAns-'.(180 + $index).'-2',
                'text'  =>  'Este es el texto de la opcion '.(180 + $index).'-2',
                'image' =>  'image '.(180 + $index).'-2',
                'answer'=>  true,
                'question_id' =>  (180 + $index),
            ]);
            DB::table('options')->insert ([
                'code'  =>  'codeAns-'.(180 + $index).'-1',
                'text'  =>  'Este es el texto de la opcion '.(180 + $index).'-1',
                'image' =>  'image '.(180 + $index).'-1',
                'answer'=>  false,
                'question_id' =>  (180 + $index),
            ]);
        }

        foreach (range(1, 10) as $index) {
            foreach (range(1, 3) as $i) {
                DB::table('options')->insert ([
                    'code'  =>  'codeAns-'.($index + 200).'-'.$i,
                    'text'  =>  'Este es el texto de la opcion '.($index + 200).'-'.$i,
                    'image' =>  'image '.($index + 200).'-'.$i,
                    'answer'=>  true,
                    'question_id' =>  ($index + 200),
                ]);
            }
            DB::table('options')->insert ([
                'code'  =>  'codeAns-'.($index + 200).'-4',
                'text'  =>  'Este es el texto de la opcion '.($index + 200).'-4',
                'image' =>  'image '.($index + 200).'-4',
                'answer'=>  false,
                'question_id' =>  ($index + 200),
            ]);
        }

        // area 501 fisica

        foreach (range(1, 20) as $index) {
            foreach (range(1, 4) as $i){
                DB::table('options')->insert ([
                    'code'  =>  'codeAns-'.(210 + $index).'-'.$i,
                    'text'  =>  'Este es el texto de la opcion '.(210 + $index).'-'.$i,
                    'image' =>  'image '.(210 + $index).'-'.$i,
                    'answer'=>  false,
                    'question_id' =>  (210 + $index),
                ]);
            }
            DB::table('options')->insert ([
                'code'  =>  'codeAns-'.(210 + $index).'-5',
                'text'  =>  'Este es el texto de la opcion '.(210 + $index).'-5',
                'image' =>  'image '.(210 + $index).'-5',
                'answer'=>  true,
                'question_id' =>  (210 + $index),
            ]);
        }

        foreach (range(1, 10) as $index) {
            foreach (range(1, 3) as $i){
                DB::table('options')->insert ([
                    'code'  =>  'codeAns-'.($index + 230).'-'.$i,
                    'text'  =>  'Este es el texto de la opcion '.($index + 230).'-'.$i,
                    'image' =>  'image '.($index + 230).'-'.$i,
                    'answer'=>  false,
                    'question_id' =>  ($index + 230),
                ]);
            }
            DB::table('options')->insert ([
                'code'  =>  'codeAns-'.($index + 230).'-4',
                'text'  =>  'Este es el texto de la opcion '.($index + 230).'-4',
                'image' =>  'image '.($index + 230).'-4',
                'answer'=>  true,
                'question_id' =>  ($index + 230),
            ]);
            DB::table('options')->insert ([
                'code'  =>  'codeAns-'.($index + 230).'-5',
                'text'  =>  'Este es el texto de la opcion '.($index + 230).'-5',
                'image' =>  'image '.($index + 230).'-5',
                'answer'=>  true,
                'question_id' =>  ($index + 230),
            ]);
        }
        */

    }
}
