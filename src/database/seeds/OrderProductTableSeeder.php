<?php

use Illuminate\Database\Seeder;

class OrderProductTableSeeder extends Seeder
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
                'order_id' => 1,
                'product_id' => 1,
                'amount' => 2,
                'price' => 120,
                'created_at' => new DateTime()
            ],
            [
                'order_id' => 1,
                'product_id' => 3,
                'price' => 150,
                'amount' => 1,
                'created_at' => new DateTime()
            ],
            [
                'order_id' => 2,
                'product_id' => 4,
                'price' => 200,
                'amount' => 3,
                'created_at' => new DateTime()
            ],
        ];
        foreach ($params as $param) {
            DB::table('order_product')->insert($param);
        }
    }
}
