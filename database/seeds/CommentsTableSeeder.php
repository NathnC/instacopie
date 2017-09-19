<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0;$i<50;$i++)
        {
            DB::table('comments')->insert([
                'user_id' => rand(0, 50),
                'title' => $faker->realText($maxNbChars = 30, $indexSize = 2),
                'comment' => $faker->realText($maxNbChars = 150, $indexSize = 2),
            ]);
        }
    }
}
