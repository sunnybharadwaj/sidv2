<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotoTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photo_tag', function (Blueprint $table) {
            $table->primary(['photo_id', 'tag_id']);
            $table->unsignedInteger('photo_id');
            $table->unsignedInteger('tag_id');
            $table->timestamps();
            $table->foreign('photo_id')->references('id')->on('photos')->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photo_tag');
    }
}
