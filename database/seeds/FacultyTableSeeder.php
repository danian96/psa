<?php

use Illuminate\Database\Seeder;

class FacultyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*DB::table('faculties')->insert([
            'code' => '183',
            'name' => 'tecnologia',
            'component_id' => '4',
            'area_id'=>'1'
        ]);
        DB::table('faculties')->insert([
            'code' => '184',
            'name' => 'ficct',
            'component_id' => '4',
            'area_id' => '2'
        ]);*/
        DB::table('faculties')->insert([
            'code' => '189',
            'name' => 'sdjjjjjjjjj',
            'component_id' => '4',
            'area_id' => '1'
        ]);
    }
}
