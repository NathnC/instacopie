<?php

use App\User;
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
        $users = User::pluck('id')->all();

        $faker = Faker::create();
        for ($i=0;$i<50;$i++)
        {
            DB::table('comments')->insert([
                'user_id' => $faker->randomElement($users),
                'title' => $faker->realText($maxNbChars = 30, $indexSize = 2),
                'comment' => $faker->realText($maxNbChars = 150, $indexSize = 2),
            ]);
        }
    }
}
