<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(AdminCategoriesTableSeeder::class);

        $this->call(CatalogCategoriesTableSeeder::class);
        $this->call(CatalogProductsTableSeeder::class);

        $this->call(CustomersGroupsTableSeeder::class);
        $this->call(CustomersTableSeeder::class);

        $this->call(OrderStatusesTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
    }
}
