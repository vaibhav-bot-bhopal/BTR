<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewshindisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_hindis', function (Blueprint $table) {
            $table->id();
            $table->string('news_title', '255');
            $table->string('news_slug', '255')->unique();
            $table->date('news_date');
            $table->text('news_discription');
            $table->string('news_image', '255');
            $table->string('m_news_image', '255');
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
        Schema::dropIfExists('news_hindis');
    }
}
