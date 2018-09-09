<?php

use Illuminate\Database\Seeder;

use App\User;

use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => 1,
            'name' => 'Adam Gleisner',
            'email' => 'amg295@cornell.edu',
            'bio' => 'Adam Gleisner is from Chicago, Illinois. His favorite city is Seattle, USA because of its natural beauty and vibrant culture.',
            'image' => '/public/images/Selected/Adam.jpg',
            'password' => bcrypt('guacmag'),
        ]);
        User::create([
            'id' => 2,
            'name' => 'Zeyu Hu',
            'email' => 'zh75@cornell.edu',
            'bio' => 'Zeyu Hu is from Beijing, China and Bangkok, Thailand. His favorite city is Montreal, Canada because it perfectly integrates two different cultures into one, producing a vibrant city which creates a unique lifestyle.',
            'image' => '/public/images/Selected/Zeyu.jpg',
            'password' => bcrypt('guacmag'),
        ]);
        User::create([
            'id' => 3,
            'name' => 'Fanny Chen',
            'email' => 'ffc24@cornell.edu',
            'bio' => "Fanny Chen is from Toronto, Canada. Her favorite city is Toronto because it's very diverse and welcoming, having a great blend of urban attractions and suburban living.",
            'image' => '/public/images/Selected/Fanny.jpg',
            'password' => bcrypt('guacmag'),
        ]);
        User::create([
            'id' => 4,
            'name' => 'Pia Bocanegra',
            'email' => 'sib35@cornell.edu',
            'bio' => 'Pia Bocanegra is from Manila, Phillipines. Her favorite city is Koror, Palau because of the people and the untouched natural beauty.',
            'image' => '/public/images/Selected/Pia.jpg',
            'password' => bcrypt('guacmag'),
        ]);
        User::create([
            'id' => 5,
            'name' => 'Christine Relander',
            'email' => 'cr463@cornell.edu',
            'bio' => 'Christine Relander is from Espoo, Finland. Her favorite city is Zurich, Switzerland because of its freedom and nature.',
            'image' => '/public/images/Selected/Christine.jpg',
            'password' => bcrypt('guacmag'),
        ]);
        User::create([
            'id' => 6,
            'name' => 'Lauren McBrearty',
            'email' => 'lmm299@cornell.edu',
            'bio' => 'Lauren McBrearty is from Rocky Point, New York. Her favorite city is Florence, Italy because it combines a rich history with the vitality of a modern city in a way that makes simply wandering the streets feel timeless and romantic.',
            'image' => '/public/images/Selected/Lauren.jpg',
            'password' => bcrypt('guacmag'),
        ]);
        User::create([
            'id' => 7,
            'name' => 'Akanksha Jain',
            'email' => 'aj448@cornell.edu',
            'bio' => 'Akanksha Jain is from Singapore, Singapore. Her favorite city is Amalfi Coast, Italy  as it has a perfect blend of natural and architectural beauty whilst still preserving the historical value of the area.',
            'image' => '/public/images/Selected/Akanksha.jpg',
            'password' => bcrypt('guacmag'),
        ]);
        User::create([
            'id' => 8,
            'name' => 'Cathy Zhang',
            'email' => 'cz223@cornell.edu',
            'bio' => 'Cathy Zhang is from Nanjing, China and Vancouver, Canada. Her favorite city is Barcelona, Spain because its vibrant culture is represented across categories, from its food, wine, architecture, music, and people.',
            'image' => '/public/images/Selected/Cathy.jpg',
            'password' => bcrypt('guacmag'),
        ]);
        User::create([
            'id' => 9,
            'name' => 'Mind Apivessa',
            'email' => 'ta273@cornell.edu',
            'bio' => 'Hi! My name is Mind.',
            'image' => '/public/images/Selected/Mind.jpg',
            'password' => bcrypt('guacmag'),
        ]);
        User::create([
            'id' => 10,
            'name' => 'Madison Holden',
            'email' => 'mh2359@cornell.edu',
            'bio' => 'Madison Holden is from St Augustine, Florida. Her favorite city is Chicago, USA because of the unique architecture and layout along the river and lake.',
            'image' => '/public/images/Selected/Madison.jpg',
            'password' => bcrypt('guacmag'),
        ]);
        User::create([
            'id' => 11,
            'name' => 'Chelsea Chan',
            'email' => 'cc987@cornell.edu',
            'bio' => 'Hi! My name is Chelsea',
            'image' => '/public/images/Selected/Chelsea.jpg',
            'password' => bcrypt('guacmag'),
        ]);
        User::create([
            'id' => 12,
            'name' => 'Amanda Chen',
            'email' => 'aec255@cornell.edu',
            'bio' => 'Hi! My name is Amanda',
            'image' => '/public/images/Selected/Amanda.jpg',
            'password' => bcrypt('guacmag'),
        ]);
        User::create([
            'id' => 13,
            'name' => 'Natalie Fung',
            'email' => 'nf238@cornell.edu',
            'bio' => 'Hi! My name is Natalie',
            'image' => '/public/images/Selected/Natalie.jpg',
            'password' => bcrypt('guacmag'),
        ]);
        User::create([
            'id' => 14,
            'name' => 'Gabriella Alvarez',
            'email' => 'gga8@cornell.edu',
            'bio' => 'Hi! My name is Gabriella',
            'image' => '/public/images/Selected/Gabriella.jpg',
            'password' => bcrypt('guacmag'),
        ]);
        User::create([
            'id' => 15,
            'name' => 'Zaeem Rana',
            'email' => 'zmr5@cornell.edu',
            'bio' => 'Hi! My name is Zaeem',
            'image' => '/public/images/Selected/Zaeem.jpg',
            'password' => bcrypt('guacmag'),
        ]);
    }
}
