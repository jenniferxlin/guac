<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('categories')->insert([
            'id' => 1, 
            'name' => 'Arts and Culture',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
         ]);
         DB::table('categories')->insert([
            'id' => 2, 
            'name' => 'Dining',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
         ]);
         DB::table('categories')->insert([
            'id' => 3, 
            'name' => 'Cafe',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
         ]);
         DB::table('categories')->insert([
            'id' => 4, 
            'name' => 'Nightlife',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
         ]);
         DB::table('categories')->insert([
            'id' => 5, 
            'name' => 'Landmark',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
         ]);
    }
}
