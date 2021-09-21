<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // paramに配列を代入
        $param = [
            [
                'title' => 'テストタスク1',
                'body' => 'テストテストあああ'
            ],
            [
                'title' => 'テストタスク2',
                'body' => 'テストですよ'
            ],
            [
                'title' => 'テストタスク3',
                'body' => 'テストでした'
            ]
        ];
        // DB::table->insertでレコードの登録
        DB::table('tasks')->insert($param);
    }
}
