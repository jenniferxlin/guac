<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class GuidesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('guides')->insert([
             'id' => 1,
             'title' => 'Tokyo',
             'country_id' => 111,
             'issue' => 'Nov 2017',
             'summary' => "Tokyo is a really cool city in Japan. I really like Tokyo. 
             Come visit Tokyo and see all the cool stuff that's there, shown below.",
             'region_id' => 12,
             'image' => '/images/bariloche1.jpg',
             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
         ]);
    }
}
