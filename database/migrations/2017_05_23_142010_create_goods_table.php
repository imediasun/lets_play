<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type')->default(0);
            $table->integer('category')->default(0);
            $table->integer('qnt')->default(0);
            $table->string('articul')->default('0');
            $table->text('description');
            $table->text('description2');
            $table->string('name')->default(0);
            $table->string('image_small')->default(0);
            $table->string('image_medium')->default(0);
            $table->string('image_large')->default(0);
            $table->string('thumbnail')->default(0);
            $table->integer('star')->default(0);
            $table->bigInteger('price')->default(0);
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('likes');
        Schema::dropIfExists('goods');
    }
}
