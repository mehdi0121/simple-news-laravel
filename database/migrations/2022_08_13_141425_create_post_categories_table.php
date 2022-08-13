<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_categories', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("slug");
            $table->text("description")->nullable();
            $table->text("image");
            $table->timestamps();
        });

        Schema::create('post_postcategories', function (Blueprint $table) {
            $table->unsignedBigInteger("post_id");
            $table->foreign("post_id")->references("id")->on("posts")->onDelete("cascade");

            $table->unsignedBigInteger("category_id");
            $table->foreign("category_id")->references("id")->on("post_categories")->onDelete("cascade");
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_categories');
    }
}
