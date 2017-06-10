<?php

use Illuminate\Database\Seeder;

class CustomersDealsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers_deals')->insert([
            [
                'deals_type_id' => 1,
                'title'         => 'Тестовое название сделки 1',
                'description'   => 'Тестовое название сделки 1 - Описание',
            ],
            [
                'deals_type_id' => 2,
                'title'         => 'Спец. предложение -10% + услуга',
                'description'   => '10% скидки на бронировку + одна из доп. услуг (дискотека, сахарная вата, кофе-стол)',
            ],
        ]);
    }
}
