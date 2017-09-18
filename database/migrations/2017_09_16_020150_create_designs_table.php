<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userID');
            $table->string('tattooName');
            $table->date('tattooDate');
            $table->string('tattooTags');
            $table->integer('tattooLikes');
            $table->integer('tattooViews');
            $table->integer('tattooShares');
            $table->text('tattooImage');
            $table->string('commentID');
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
        Schema::dropIfExists('designs');
    }
}
