<?php

use Illuminate\Database\Seeder;

class AdminCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('super_admin_categories')->insert([
            [
                'parent_id' => 0,
                'name'      => 'Пользователи',
                'icon'      => 'fa-users',
                'link'      => '/admin',
            ],
            [
                'parent_id' => 1,
                'name'      => 'Управление пользователями',
                'icon'      => 'fa-registered',
                'link'      => '/admin/customers_managment',
            ],
            [
                'parent_id' => 0,
                'name'      => 'Покупатели',
                'icon'      => 'fa-gift',
                'link'      => '/admin/customers',
            ],
            [
                'parent_id' => 3,
                'name'      => 'Покупатели',
                'icon'      => 'fa-envelope',
                'link'      => '/admin/customers',
            ],
            [
                'parent_id' => 3,
                'name'      => 'Группы клиентов',
                'icon'      => 'fa-envelope',
                'link'      => '/admin/clients_groups',
            ],
            [
                'parent_id' => 3,
                'name'      => 'Названия сделок',
                'icon'      => 'fa-envelope',
                'link'      => '/admin/deals_names',
            ],
          

        ]);

        DB::table('center_admin_categories')->insert([
            [
                'parent_id' => 0,
                'name'      => 'Trade center',
                'icon'      => 'fa-users',
                'link'      => '/center_admin/trade_center',
            ],
            [
                'parent_id' => 1,
                'name'      => 'Parking prices',
                'icon'      => 'fa-registered',
                'link'      => '/center_admin/parking_payment',
            ],

            [
                'parent_id' => 1,
                'name'      => 'Statistics',
                'icon'      => 'fa-gift',
                'link'      => '/center_admin/statistic',
            ],
            [
                'parent_id' => 0,
                'name'      => 'Promotions',
                'icon'      => 'fa-envelope',
                'link'      => '/center_admin/sales',
            ],
        ]);

        DB::table('admin_categories')->insert([
            [
                'parent_id' => 0,
                'name'      => 'Promotions',
                'icon'      => 'fa-users',
                'link'      => '/shop_admin/sales',
            ],
            [
                'parent_id' => 0,
                'name'      => 'Statistics',
                'icon'      => 'fa-gift',
                'link'      => '/shop_admin/statistic',
            ],
        ]);
    }
}
