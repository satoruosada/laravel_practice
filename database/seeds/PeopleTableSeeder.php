<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'satoru',
            'mail' => 'satoru@yahoo.co.jp',
            'age' => '12',
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'hanako',
            'mail' => 'hanako@yahoo.co.jp',
            'age' => '10',
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'ppppp',
            'mail' => 'ppppp@yahoo.co.jp',
            'age' => '19',
        ];
        DB::table('people')->insert($param);

    }
}
