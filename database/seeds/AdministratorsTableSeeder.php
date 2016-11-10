<?php

use Illuminate\Database\Seeder;

class AdministratorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 5) as $index) {
            DB::table('administrators')->insert([
                'person_id' => ($index * 2) - 1
            ]);
        }
    }
}
