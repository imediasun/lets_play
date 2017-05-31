<?php

use Illuminate\Database\Seeder;

class CustomersGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers_groups')->insert([
            [
                'name'        => 'Default',
                'description' => 'Default',
                'active'      => 1,
            ],
            [
                'name'        => 'Частный клиент RUS',
                'description' => 'Частный клиент RUS',
                'active'      => 1,
            ],
            [
                'name'        => 'Частный клиент LV',
                'description' => 'Частный клиент LV',
                'active'      => 1,
            ],
        ]);
    }
}
