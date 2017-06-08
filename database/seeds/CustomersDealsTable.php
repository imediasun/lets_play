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
        DB::table('customers_details')->insert([
            [
                'title'       => 'Тестовое название сделки 1',
                'description' => 'Тестовое название сделки 1 - Описание',
            ],
            [
                'title'       => 'Спец. предложение -10% + услуга',
                'description' => '10% скидки на бронировку + одна из доп. услуг (дискотека, сахарная вата, кофе-стол)',
            ],
        ]);
    }
}
