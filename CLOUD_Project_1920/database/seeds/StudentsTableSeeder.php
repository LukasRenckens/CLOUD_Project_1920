<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->truncate();
        $faker = \Faker\Factory::create();
        for($i = 0; $i < 1000; $i++){    //100 Studenten
            DB::table('students')->insert([
                //'naam' => $faker->name,
                'studentennummer' => rand(170000,180000),
                'klas' => $faker->word
            ]);
        }
    }
}
