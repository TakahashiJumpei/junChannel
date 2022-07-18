<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //ここに記述したSeederファイルのみシーディングが実行される
        //都度、指定したいSeederファイルを書き換えてOK
        $this->call(CategoriesTableSeeder::class);
        //$this->call(GuestsTableSeeder::class);

    }
}
