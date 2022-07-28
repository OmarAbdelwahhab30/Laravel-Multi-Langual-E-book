<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string("title");
	        $table->string('author');
            $table->string("file");
            $table->text('info');
            $table->string('image');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references("id")->on("users")->cascadeOnUpdate()->cascadeOnUpdate();
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references("id")->on("categories")->cascadeOnUpdate()->cascadeOnUpdate();
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
        Schema::dropIfExists('books');
    }
}
