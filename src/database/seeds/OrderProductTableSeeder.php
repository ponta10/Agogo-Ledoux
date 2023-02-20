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
            [
                'order_id' => 3,
                'product_id' => 6,
                'price' => 250,
                'amount' => 5,
                'created_at' => new DateTime()
            ],
            [
                'order_id' => 3,
                'product_id' => 7,
                'price' => 100,
                'amount' => 2,
                'created_at' => new DateTime()
            ],
            [
                'order_id' => 3,
                'product_id' => 8,
                'price' => 300,
                'amount' => 1,
                'created_at' => new DateTime()
            ],
            [
                'order_id' => 4,
                'product_id' => 6,
                'price' => 250,
                'amount' => 4,
                'created_at' => new DateTime()
            ],
            [
                'order_id' => 5,
                'product_id' => 8,
                'price' => 300,
                'amount' => 10,
                'created_at' => new DateTime()
            ],
        ];
        foreach ($params as $param) {
            DB::table('order_product')->insert($param);
        }
    }
}
