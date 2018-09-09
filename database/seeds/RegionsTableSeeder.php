<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('regions')->insert([
             'id' => 1,
             'name' => 'North America',
             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
         ]);
         DB::table('regions')->insert([
             'id' => 2,
             'name' => 'South America',
             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
         ]);
         DB::table('regions')->insert([
             'id' => 3,
             'name' => 'Asia',
             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
         ]);
         DB::table('regions')->insert([
             'id' => 4,
             'name' => 'Africa',
             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
         ]);
         DB::table('regions')->insert([
             'id' => 5,
             'name' => 'Europe',
             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
         ]);
         DB::table('regions')->insert([
             'id' => 6,
             'name' => 'Oceania',
             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
         ]);
    }
}
