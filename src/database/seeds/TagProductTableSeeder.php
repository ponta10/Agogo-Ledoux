<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [
            [
                'product_id' => '1',
                'tag_id' => '1',
                'bill_amount' => '120',
                'updated_at' => new DateTime(),
            ],
            [
                'product_id' => '1',
                'tag_id' => '2',
                'bill_amount' => '120',
                'updated_at' => new DateTime(),
            ],
            [
                'product_id' => '1',
                'tag_id' => '3',
                'bill_amount' => '120',
                'updated_at' => new DateTime(),
            ],
            [
                'product_id' => '2',
                'tag_id' => '1',
                'bill_amount' => '240',
                'updated_at' => new DateTime(),
            ],
            [
                'product_id' => '2',
                'tag_id' => '2',
                'bill_amount' => '240',
                'updated_at' => new DateTime(),
            ],
            [
                'product_id' => '3',
                'tag_id' => '2',
                'bill_amount' => '300',
                'updated_at' => new DateTime(),
            ],
        ];
        foreach ($params as $param) {
            DB::table('tag_products')->insert($param);
        };
    }
}
