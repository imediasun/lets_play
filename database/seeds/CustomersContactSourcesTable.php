<?php

use Illuminate\Database\Seeder;

class CustomersContactSourcesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers_contact_sources')->insert([
            [
                'title' => 'Нет данных',
            ],
            [
                'title' => 'Контакт с дня рождения',
            ],
            [
                'title' => 'Городской Лагерь',
            ],
            [
                'title' => 'Мероприятие',
            ],
        ]);
    }
}
