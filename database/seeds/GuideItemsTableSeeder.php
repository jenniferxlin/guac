<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class GuideItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('guide_items')->insert([
             'id' => 1,
             'guide_id' => 1,
             'name' => 'Meiji-Jingu Shrine',
             'hours' => '7am - 10pm',
             'location' => 'Harajuku',
             'summary' => "This shrine has a lot of wonderful things about it,
             but I don't know any of them. Therefore, I am writing this summary just
             as a basic thing, even though I don't know it.",
             'category_id' => 1,
             'image' => 'images/bariloche1.jpg',
             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
         ]);
    }
}
