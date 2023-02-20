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
                'created_at' => "2022-10-10",
                'updated_at' => new DateTime(),
            ],
            [
                'name' => 'りんご',
                'desc' => '青森のりんごだよ',
                'image' => 'apple.jpeg',
                'price' => 150,
                'stock' => 4,
                'created_at' => "2022-10-10",
                'updated_at' => new DateTime(),
            ],
            [
                'name' => 'ぶどう',
                'desc' => '山梨の葡萄だよ',
                'image' => 'grape.jpeg',
                'price' => 150,
                'stock' => 4,
                'created_at' => "2022-10-10",
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
                'name' => 'キウイ',
                'desc' => 'オーストラリアのキウイだよ',
                'image' => 'kiui.jpeg',
                'price' => 90,
                'stock' => 10,
                'created_at' => "2022-10-10",
                'updated_at' => new DateTime(),
            ],
            [
                'name' => 'パイナップル',
                'desc' => '沖縄のパイナップルだよ',
                'image' => 'pain.jpeg',
                'price' => 250,
                'stock' => 10,
                'created_at' => "2022-10-10",
                'updated_at' => new DateTime(),
            ],
            [
                'name' => 'バナナ',
                'desc' => 'フィリピンのバナナだよ',
                'image' => 'banana.jpeg',
                'price' => 100,
                'stock' => 10,
                'created_at' => "2022-10-10",
                'updated_at' => new DateTime(),
            ],
            [
                'name' => 'いちご',
                'desc' => '栃木のいちごだよ',
                'image' => 'itigo.jpeg',
                'price' => 300,
                'stock' => 10,
                'created_at' => "2022-10-10",
                'updated_at' => new DateTime(),
            ],
            [
                'name' => 'マンゴー',
                'desc' => '宮崎のマンゴーだよ',
                'image' => 'mango.jpeg',
                'price' => 400,
                'stock' => 10,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'name' => 'さくらんぼ',
                'desc' => '山形のさくらんぼだよ',
                'image' => 'sakura.jpeg',
                'price' => 100,
                'stock' => 10,
                'created_at' => "2022-10-10",
                'updated_at' => new DateTime(),
            ],
            [
                'name' => 'スイカ',
                'desc' => '熊本のスイカだよ',
                'image' => 'suica.jpeg',
                'price' => 500,
                'stock' => 10,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'name' => 'メロン',
                'desc' => '夕張のメロンだよ',
                'image' => 'meron.jpeg',
                'price' => 1000,
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
