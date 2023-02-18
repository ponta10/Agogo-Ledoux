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
                'tag_id' => '4',
                'updated_at' => new DateTime(),
                //みかん1
            ],
            [
                'product_id' => '1',
                'tag_id' => '5',
                'updated_at' => new DateTime(),
                //みかん1
            ],
            [
                'product_id' => '2',
                'tag_id' => '3',
                'updated_at' => new DateTime(),
                //りんご1
            ],
            [
                'product_id' => '2',
                'tag_id' => '6',
                'updated_at' => new DateTime(),
                //りんご1
            ],
            [
                'product_id' => '3',
                'tag_id' => '2',
                'updated_at' => new DateTime(),
                //ブドウ1
            ],
            [
                'product_id' => '3',
                'tag_id' => '5',
                'updated_at' => new DateTime(),
                //ブドウ1
            ],
            [
                'product_id' => '4',
                'tag_id' => '2',
                'updated_at' => new DateTime(),
                //もも1
            ],
            [
                'product_id' => '4',
                'tag_id' => '5',
                'updated_at' => new DateTime(),
                //もも1
            ],
        ];
        foreach ($params as $param) {
            DB::table('tag_products')->insert($param);
        };
    }
}
