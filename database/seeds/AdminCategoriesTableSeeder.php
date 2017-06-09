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
                'name'      => 'Список пользователей',
                'icon'      => 'fa-registered',
                'link'      => '/admin/users',
            ],

            [
                'parent_id' => 0,
                'name'      => 'Клиенты',
                'icon'      => 'fa-gift',
                'link'      => '/admin/customers',
            ],
            [
                'parent_id' => 3,
                'name'      => 'Список клиентов',
                'icon'      => 'fa-envelope',
                'link'      => '/admin/customers',
            ],
            [
                'parent_id' => 3,
                'name'      => 'Группы клиентов',
                'icon'      => 'fa-envelope',
                'link'      => '/admin/groups',
            ],
            [
                'parent_id' => 3,
                'name'      => 'Названия сделок',
                'icon'      => 'fa-envelope',
                'link'      => '/admin/deals',
            ],

            [
                'parent_id' => 0,
                'name'      => 'Каталог',
                'icon'      => 'fa-book',
                'link'      => '/admin/',
            ],
            [
                'parent_id' => 7,
                'name'      => 'Категории',
                'icon'      => 'fa-folder-open-o',
                'link'      => '/admin/categories',
            ],
            [
                'parent_id' => 7,
                'name'      => 'Товары',
                'icon'      => 'fa-folder-open-o',
                'link'      => '/admin/products',
            ],

            [
                'parent_id' => 0,
                'name'      => 'Продажи',
                'icon'      => 'fa-book',
                'link'      => '/admin/',
            ],
            [
                'parent_id' => 10,
                'name'      => 'Заказы',
                'icon'      => 'fa-folder-open-o',
                'link'      => '/admin/orders',
            ],
            [
                'parent_id' => 10,
                'name'      => 'Статусы заказов',
                'icon'      => 'fa-folder-open-o',
                'link'      => '/admin/orders-statuses',
            ],

            [
                'parent_id' => 3,
                'name'      => 'Источники контактов',
                'icon'      => 'fa-folder-open-o',
                'link'      => '/admin/contact-sources',
            ],
            [
                'parent_id' => 3,
                'name'      => 'Типы контактов',
                'icon'      => 'fa-folder-open-o',
                'link'      => '/admin/contact-types',
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
