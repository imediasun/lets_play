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
        // $this->call(UsersTableSeeder::class);


        DB::table('roles')->insert([
            [
                'name' => 'Super Admin',
            ],
            [
                'name' => 'Center Admin',
            ],
            [
                'name' => 'Shop Admin',
            ],
        ]);


        DB::table('permissions')->insert([
            [
                'name' => 'VIEW_ADMIN',
            ],
            [
                'name' => 'ADMIN_USERS',
            ],
            [
                'name' => 'SELF_ADMIN',
            ]
        ]);


        DB::table('permission_role')->insert([
            [
                'role_id' => 1,
                'permission_id' => 1,
            ],
            [
                'role_id' => 1,
                'permission_id' => 2,
            ],
            [
                'role_id' => 2,
                'permission_id' => 2,
            ],
            [
                'role_id' => 3,
                'permission_id' => 3,
            ]
        ]);


        DB::table('super_admin_categories')->insert([
            [
                'parent_id' => 0,
                'name' => 'Users',
                'icon' => 'fa-users',
                'link' => '/admin'
            ],
            [
                'parent_id' => 1,
                'name' => 'User management',
                'icon' => 'fa-registered',
                'link' => '/admin/customers_managment'
            ],
            [
                'parent_id' => 0,
                'name' => 'Trade centers',
                'icon' => 'fa-gift',
                'link' => '/admin/trade_centres'
            ],
            [
                'parent_id' => 3,
                'name' => 'Add trade center',
                'icon' => 'fa-envelope',
                'link' => '/admin/add_trade_center'
            ],
            [
                'parent_id' => 3,
                'name' => 'Edit trade center',
                'icon' => 'fa-envelope',
                'link' => '/admin/edit_trade_center/edit_center'
            ],
            [
                'parent_id' => 0,
                'name' => 'Clients',
                'icon' => 'fa-envelope',
                'link' => '/admin/clients'
            ],
            [
                'parent_id' => 0,
                'name' => 'Advertising',
                'icon' => 'fa-bullhorn',
                'link' => '/admin/adv'
            ],
            [
                'parent_id' => 0,
                'name' => 'Partners',
                'icon' => 'fa-thumbs-o-up',
                'link' => '/admin/partners'
            ],
            [
                'parent_id' => 9,
                'name' => 'Logos',
                'icon' => 'fa-envelope',
                'link' => '/admin/add_logos'
            ],
            [
                'parent_id' => 3,
                'name' => 'Parking prices of center',
                'icon' => 'fa-envelope',
                'link' => '/admin/edit_trade_center/parking_prices'
            ],
            [
                'parent_id' => 7,
                'name' => 'Add ad',
                'icon' => 'fa-envelope',
                'link' => '/admin/add_adv_section'
            ],
            [
                'parent_id' => 7,
                'name' => 'Edit ad',
                'icon' => 'fa-envelope',
                'link' => '/admin/edit_adv_section/edit_adv'
            ],
        ]);


        DB::table('center_admin_categories')->insert([
            [
                'parent_id' => 0,
                'name' => 'Trade center',
                'icon' => 'fa-users',
                'link' => '/center_admin/trade_center'
            ],
            [
                'parent_id' => 1,
                'name' => 'Parking prices',
                'icon' => 'fa-registered',
                'link' => '/center_admin/parking_payment'
            ],

            [
                'parent_id' => 1,
                'name' => 'Statistics',
                'icon' => 'fa-gift',
                'link' => '/center_admin/statistic'
            ],
            [
                'parent_id' => 0,
                'name' => 'Promotions',
                'icon' => 'fa-envelope',
                'link' => '/center_admin/sales'
            ]
        ]);


        DB::table('admin_categories')->insert([
            [
                'parent_id' => 0,
                'name' => 'Promotions',
                'icon' => 'fa-users',
                'link' => '/shop_admin/sales'
            ],
            [
                'parent_id' => 0,
                'name' => 'Statistics',
                'icon' => 'fa-gift',
                'link' => '/shop_admin/statistic'
            ]
        ]);
    }
}
