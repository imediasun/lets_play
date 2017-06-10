<?php

use Illuminate\Database\Seeder;

class CustomersDealsTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers_deals_types')->insert([
            [
                'title' => 'Сделка по полной цене',
            ],
            [
                'title' => 'Сделка по скидке',
            ],
        ]);
    }
}
