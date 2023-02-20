<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
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
                'text' => "aaaaaa",
                'star' => 2,
                'created_at' => new DateTime()
            ],
            [
                'user_id' => 3,
                'product_id' => 2,
                'text' => "aaaaaa",
                'star' => 2,
                'created_at' => new DateTime()
            ],
            [
                'user_id' => 3,
                'product_id' => 2,
                'text' => "bbbbbb",
                'star' => 3,
                'created_at' => new DateTime()
            ],
        ];
        foreach ($params as $param) {
            DB::table('comments')->insert($param);
        }
    }
}
