<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
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
                'name' => 'みかん',
                'desc' => '愛媛のミカンだよ',
                'image' => 'mikan.jpeg',
                'price' => 120,
                'stock' => 5,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'name' => 'りんご',
                'desc' => '青森のりんごだよ',
                'image' => 'apple.jpeg',
                'price' => 150,
                'stock' => 4,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'name' => 'ぶどう',
                'desc' => '山梨の葡萄だよ',
                'image' => 'grape.jpeg',
                'price' => 150,
                'stock' => 4,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'name' => 'もも',
                'desc' => '山梨のももだよ',
                'image' => 'peach.jpeg',
                'price' => 200,
                'stock' => 10,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'name' => 'もも',
                'desc' => '山梨のももだよ',
                'image' => 'peach.jpeg',
                'price' => 200,
                'stock' => 10,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'name' => 'もも',
                'desc' => '山梨のももだよ',
                'image' => 'peach.jpeg',
                'price' => 200,
                'stock' => 10,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'name' => 'もも',
                'desc' => '山梨のももだよ',
                'image' => 'peach.jpeg',
                'price' => 200,
                'stock' => 10,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        ];
        foreach ($params as $param) {
            DB::table('products')->insert($param);
        }
    }
}
