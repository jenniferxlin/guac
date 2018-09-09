<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->boolean('featured');
            $table->string('name')->unique();
            $table->primary('name');
            $table->string('title');
            $table->string('image');
            $table->string('city');
            $table->text('summary');
            $table->text('text');
            $table->integer('user_id');
            $table->string('issue');
            $table->integer('category_id');
            $table->integer('region_id');
            $table->integer('country_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
