<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatalogProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalog_products', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('category_id')->index();
            $table->string('name')->required();
            $table->string('art')->required();
            $table->decimal('price', 13, 2)->default(0.00);
            $table->unsignedInteger('qnt')->default(0);
            $table->text('description')->nullable();
            $table->text('description2')->nullable();
            $table->boolean('active')->default(0);

            $table->string('image_small')->default(0);
            $table->string('image_medium')->default(0);
            $table->string('image_large')->default(0);
            $table->string('thumbnail')->default(0);

            $table->timestamps();

            $table->foreign('category_id')
                ->references('id')
                ->on('catalog_categories')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catalog_products');
        Schema::dropIfExists('catalog_categories');
    }
}
