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
        $this->call([MenuSeeder::class, CategoriesSeeder::class, RolesSeeder::class, UsersSeeder::class, CountriesSeeder::class, ProductsSeeder::class, OrderStatusesSeeder::class, BrandsSeeder::class, ProductCategoriesSeeder::class, ProductPopularSeeder::class, OrdersSeeder::class, OrderItemsSeeder::class, CategoriesMenuSeeder::class, CartsSeeder::class]);
    }
}
