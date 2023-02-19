<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
                'name' => 'test1',
                'email' => 'test1@example.com',
                'password' => \Hash::make('hogehoge1'),
                'created_at' => New DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'name' => 'test2',
                'email' => 'test2@example.com',
                'password' => \Hash::make('hogehoge2'),
                'created_at' => New DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'name' => 'test3',
                'email' => 'test3@example.com',
                'password' => \Hash::make('hogehoge3'),
                'created_at' => New DateTime(),
                'updated_at' => new DateTime(),
            ],
        ];
        foreach ($params as $param) {
            DB::table('users')->insert($param);
        }
    }
}
