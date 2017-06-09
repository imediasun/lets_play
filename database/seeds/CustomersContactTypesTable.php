<?php

use Illuminate\Database\Seeder;

class CustomersContactTypesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers_contact_types')->insert([
            [
                'title' => 'Новый контакт',
            ],
            [
                'title' => 'Брошенный заказ',
            ],
            [
                'title' => 'Ненадежный клиент',
            ],
        ]);
    }
}
