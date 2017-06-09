<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('group_id');
            $table->unsignedInteger('contact_source_id');
            $table->unsignedInteger('contact_type_id');
            $table->string('email')->required();
            $table->string('phone')->required();
            $table->string('first_name')->required();
            $table->string('last_name')->required();
            $table->boolean('active')->default(0);
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));

            $table->foreign('group_id')
                ->references('id')
                ->on('customers_groups');

            $table->foreign('contact_source_id')
                ->references('id')
                ->on('customers_contact_sources');

            $table->foreign('contact_type_id')
                ->references('id')
                ->on('customers_contact_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
