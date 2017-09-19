<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * @var array
     */
    protected $truncate = [
        'users',
        'comments',
    ];


    /**
     * @var array
     */
    protected $seeders = [
        UsersTableSeeder::class,
        CommentsTableSeeder::class,
    ];


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        foreach ($this->truncate as $table) {
            DB::table($table)->truncate();
        }

        foreach ($this->seeders as $seeder) {
            $this->call($seeder);
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
