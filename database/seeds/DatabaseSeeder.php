<?php

use App\Discography;
use App\News;
use App\Product;
use App\User;
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
        factory(User::class, 20)->create();
        factory(Product::class, 20)->create();
        factory(News::class, 20)->create();
        factory(Discography::class, 20)->create();
    }
}
