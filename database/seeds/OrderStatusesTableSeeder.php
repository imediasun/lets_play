<?php

use Illuminate\Database\Seeder;

class OrderStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_statuses')->insert([
            [
                'name'  => 'Pending',
                'title' => 'В ожидании',
            ],
            [
                'name'  => 'Paid',
                'title' => 'Оплачен',
            ],
            [
                'name'  => 'PaidInPart',
                'title' => 'Оплачен частично',
            ],
            [
                'name'  => 'Completed',
                'title' => 'Выполнен',
            ],
            [
                'name'  => 'Canceled',
                'title' => 'Отменен',
            ],
            [
                'name'  => 'Overdue',
                'title' => 'Просрочен',
            ],
        ]);
    }
}
