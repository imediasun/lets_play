<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            [
                'group_id' => 1,
                'email'              => 'Client1@example.com',
                'phone'              => '+38(000)999-88-77',
                'first_name'         => 'FirstName1',
                'last_name'          => 'LastName1',
                'active'             => 1,
            ],
            [
                'group_id' => 2,
                'email'              => 'Client2@example.com',
                'phone'              => '+38(000)888-77-66',
                'first_name'         => 'FirstName2',
                'last_name'          => 'LastName2',
                'active'             => 1,
            ],
            [
                'group_id' => 3,
                'email'              => 'Client3@example.com',
                'phone'              => '+38(000)777-66-55',
                'first_name'         => 'FirstName3',
                'last_name'          => 'LastName3',
                'active'             => 0,
            ],
            [
                'group_id' => 1,
                'email'              => 'Client4@example.com',
                'phone'              => '+38(000)666-55-44',
                'first_name'         => 'FirstName4',
                'last_name'          => 'LastName4',
                'active'             => 1,
            ],
            [
                'group_id' => 1,
                'email'              => 'Client5@example.com',
                'phone'              => '+38(000)555-44-33',
                'first_name'         => 'FirstName5',
                'last_name'          => 'LastName5',
                'active'             => 1,
            ],
        ]);
    }
}
