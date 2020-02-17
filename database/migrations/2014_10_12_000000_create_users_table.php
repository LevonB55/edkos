<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('company')->nullable();
            $table->string('business_phone')->nullable();
            $table->string('mobile_phone')->nullable();
            $table->enum('date_format', ['mm/dd/yyyy', 'dd/mm/yyyy', 'yyyy-mm-dd']);
            $table->float('standard_rate',8,2)->default(0);
            $table->string('vat')->nullable();
            $table->string('street')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->smallInteger('country_id')->nullable();
            $table->string('zip')->nullable();
            $table->string('bank_account')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
