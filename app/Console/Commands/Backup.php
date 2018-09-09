<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Article;

class Backup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'backup:app';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Backup the database before a migration.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $articles = Article::all();
        foreach($articles as $article) {
            $name = $article->name;
            $json = $article->toJson();
            $file = fopen("database/seeds/articles/$name.json", 'w');
            $result = fwrite($file, $json);
            fclose($file);
        }
    }
}
