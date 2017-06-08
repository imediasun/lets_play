<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

       

            Schema::create('users', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name')->unique();
                $table->string('email')->unique();
                $table->string('password');
                $table->string('first_name')->nullable();
                $table->string('last_name')->nullable();
                $table->string('avatar')->nullable();
                $table->string('mobile')->default(0);
                $table->string('add_phone')->default(0);
                $table->string('information')->default('information');
                $table->integer('status')->unsigned()->default(1);
                $table->boolean('activated')->default(false);
                $table->rememberToken();
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
   
    Schema::dropIfExists('users');
    }
}
