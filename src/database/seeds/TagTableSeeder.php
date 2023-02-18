<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagTableSeeder extends Seeder
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
                'name' => '春',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'name' => '夏',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'name' => '秋',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'name' => '冬',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'name' => '完熟',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'name' => '新鮮',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        ];
        foreach ($params as $param) {
            DB::table('tags')->insert($param);
        };
    }
}
