<?php

use App\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'Nathan Connor',
            'password' => bcrypt('secret'),
            'email' => 'nathan.connor@betterbrandagency.com',
            'verified' => '1',
        ]);

        $faker = Faker::create();
        for ($i=0;$i<50;$i++)
        {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('secret'),
            ]);
        }
    }
}
