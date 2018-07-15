<?php

use Illuminate\Database\Seeder;

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
          'name' =>'taro',
          'mail' =>'taro@gmail.com',
          'age' =>22,
        ];
        DB::table('people')->insert($param);

        $param = [
          'name' =>'hanako',
          'mail' =>'hanako@gmail.com',
          'age' =>34,
        ];
        DB::table('people')->insert($param);

        $param = [
          'name' =>'sachiko',
          'mail' =>'sachiko@gmail.com',
          'age' =>48,
        ];
        DB::table('people')->insert($param);
    }
}
