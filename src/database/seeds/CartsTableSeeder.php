<?php

use Illuminate\Database\Seeder;

class CartsTableSeeder extends Seeder
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
                'user_id' => 1,
                'product_id' => 1,
                'amount' => 1,
                'created_at' => new DateTime()
            ],
            [
                'user_id' => 1,
                'product_id' => 2,
                'amount' => 2,
                'created_at' => new DateTime()
            ],
            [
                'user_id' => 1,
                'product_id' => 3,
                'amount' => 3,
                'created_at' => new DateTime()
            ],
            [
                'user_id' => 1,
                'product_id' => 4,
                'amount' => 3,
                'created_at' => new DateTime()
            ],
        ];
        foreach ($params as $param) {
            DB::table('carts')->insert($param);
        }
    }
}
