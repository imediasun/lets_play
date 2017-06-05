<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            [
                'status_id'  => 1,
                'customer_id'  => 1,
                'oblast' => 'oblast1',
                'region' => 'region1',
                'city' => 'city1',
                'address' => 'address1',
                'postcode' => 'postcode1',
                'total' => 11.11,
                'quantity' => 1,
            ],
            [
                'status_id'  => 2,
                'customer_id'  => 2,
                'oblast' => 'oblast2',
                'region' => 'region2',
                'city' => 'city2',
                'address' => 'address2',
                'postcode' => 'postcode2',
                'total' => 22.22,
                'quantity' => 1,
            ],
            [
                'status_id'  => 3,
                'customer_id'  => 3,
                'oblast' => 'oblast3',
                'region' => 'region3',
                'city' => 'city3',
                'address' => 'address3',
                'postcode' => 'postcode3',
                'total' => 33.33,
                'quantity' => 1,
            ],
            [
                'status_id'  => 1,
                'customer_id'  => 1,
                'oblast' => 'oblast4',
                'region' => 'region4',
                'city' => 'city4',
                'address' => 'address4',
                'postcode' => 'postcode4',
                'total' => 44.44,
                'quantity' => 2,
            ],
            [
                'status_id'  => 1,
                'customer_id'  => 1,
                'oblast' => 'oblast5',
                'region' => 'region5',
                'city' => 'city5',
                'address' => 'address5',
                'postcode' => 'postcode5',
                'total' => 55.55,
                'quantity' => 3,
            ],
        ]);
    }
}
