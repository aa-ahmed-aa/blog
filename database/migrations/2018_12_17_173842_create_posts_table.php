<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection($this->connection)
            ->table('posts', function (Blueprint $table)
            {
            $table->increments('id');
            $table->string("title");
            $table->string("sub_url");
            $table->string("html");
            $table->string("category");
            $table->string("author");
            $table->bigInteger("visits");
            $table->string("cover_image");
            $table->boolean("active");
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
        Schema::connection($this->connection)
            ->table('posts', function (Blueprint $collection)
            {
                $collection->dropIfExists();
            });
    }
}
