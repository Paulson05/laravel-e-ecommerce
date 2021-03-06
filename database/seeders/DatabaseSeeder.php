<?php

namespace Database\Seeders;

use App\Models\Banner;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
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

        $this->call(UsersTableSeeder::class);
        Brand::factory(10)->create();
         Banner::factory(5)->create();
        Category::factory(10)->create();
        Product::factory(5)->create();


//         \App\Models\User::factory(10)->create();

    }
}
