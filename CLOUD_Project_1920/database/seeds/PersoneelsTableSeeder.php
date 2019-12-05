<?php

use Illuminate\Database\Seeder;

class PersoneelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personeels')->truncate();
        $faker = \Faker\Factory::create();
        for($i = 0; $i < 50; $i++){  
            DB::table('personeels')->insert([
                //'naam' => $faker->name,
                'personeelsnummer' => rand(0,100000),
                'vak' => $faker->word,
                'klas' => $faker->word
            ]);
        }
    }
}
