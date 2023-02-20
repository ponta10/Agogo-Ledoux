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
        //
        $params = [
            [
                'user_id' => 2,
                'bill_amount' => 390,
                'created_at' => new DateTime()
            ],
            [
                'user_id' => 3,
                'bill_amount' => 600,
                'created_at' => new DateTime()
            ],
            [
                'user_id' => 1,
                'bill_amount' => 1750,
                'created_at' => new DateTime()
            ],
            [
                'user_id' => 2,
                'bill_amount' => 1000,
                'created_at' => new DateTime()
            ],
            [
                'user_id' => 3,
                'bill_amount' => 3000,
                'created_at' => new DateTime()
            ],
        ];
        foreach ($params as $param) {
            DB::table('orders')->insert($param);
        }
    }
}
