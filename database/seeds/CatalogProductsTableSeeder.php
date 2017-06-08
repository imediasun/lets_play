<?php

use Illuminate\Database\Seeder;

class CatalogProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catalog_products')->insert([
            [
                'category_id'  => 1,
                'name'         => 'Product1',
                'art'          => 'Art1',
                'price'        => 11.11,
                'qnt'          => 1,
                'description'  => 'Product1 description',
                'description2' => 'Product1 description2',
                'active'       => 1,
            ],
            [
                'category_id'  => 1,
                'name'         => 'Product2',
                'art'          => 'Art2',
                'price'        => 22.22,
                'qnt'          => 5,
                'description'  => 'Product2 description',
                'description2' => 'Product2 description2',
                'active'       => 1,
            ],
            [
                'category_id'  => 2,
                'name'         => 'Product3',
                'art'          => 'Art3',
                'price'        => 33.33,
                'qnt'          => 2,
                'description'  => 'Product3 description',
                'description2' => 'Product3 description2',
                'active'       => 1,
            ],
            [
                'category_id'  => 2,
                'name'         => 'Product4',
                'art'          => 'Art4',
                'price'        => 44.44,
                'qnt'          => 4,
                'description'  => 'Product4 description',
                'description2' => 'Product4 description2',
                'active'       => 0,
            ],
            [
                'category_id'  => 3,
                'name'         => 'Product5',
                'art'          => 'Art5',
                'price'        => 55.55,
                'qnt'          => 5,
                'description'  => 'Product5 description',
                'description2' => 'Product5 description2',
                'active'       => 1,
            ],
        ]);
    }
}
