<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB:: table('categories')->inser([
            ['name' =>'商品について'],
            ['name' =>'配送について'],
            ['name' =>'支払いについて'],
            ['name' =>'その他'],
        ]);
        $this->call(CategoriesSeeder::class);
        //
    }
}
