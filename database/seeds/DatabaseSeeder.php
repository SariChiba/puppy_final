<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      factory(User::class)->times(10)->create();
      factory(Product::class)->times(10)->create();
      factory(Category::class)->times(10)->create();
    }
}
