<?php

use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('test')->insert([
            ['name'=>'小王','password'=>'123456'],
            ['name'=>'小猪猪','password'=>'asd123']
        ]);
    }
}
