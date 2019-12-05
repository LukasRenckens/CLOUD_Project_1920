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
    
        for($i = 0; $i < 10; $i++){
            DB::table('students')->insert([
                'klas' => "EA-ICT",
                'naam' => "Jongen",
                'voornaam' => "Niels",
                'created_at' => '2019-11-25 16:04:00',
                'updated_at' => '2019-11-25 16:04:00'
            ]);
        }
    }
}
