<?php

use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // DB::table('groups')->truncate();

      DB::table('groups')->insert([
        [
          'name' => str_random(10),
          'url' => str_random(10),
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s"), 
        ],
        [
          'name' => str_random(10),
          'url' => str_random(10),
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s"), 
        ],
      ]);
    }
}
