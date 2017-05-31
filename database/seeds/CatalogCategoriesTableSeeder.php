<?php

use Illuminate\Database\Seeder;

class CatalogCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catalog_categories')->insert([
            [
                'parent_id'   => 0,
                'name'        => 'Category1',
                'description' => 'Category1 description',
                'active'      => 1,
            ],
            [
                'parent_id'   => 0,
                'name'        => 'Category2',
                'description' => 'Category2 description',
                'active'      => 1,
            ],
            [
                'parent_id'   => 0,
                'name'        => 'Category3',
                'description' => 'Category3 description',
                'active'      => 1,
            ],
        ]);
    }
}
