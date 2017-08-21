<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_entries', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('blog_entry');
            $table->string('title');
            $table->string('image_file_names');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('blog_entries');
    }
}
