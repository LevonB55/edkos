<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('number');
            $table->unsignedInteger('user_id');
            $table->string('company')->nullable();
            $table->string('sender_phone')->nullable();
            $table->string('issue_date');
            $table->string('due_date');
            $table->string('sender_name')->nullable();
            $table->string('sender_email')->nullable();
            $table->string('sender_street')->nullable();
            $table->string('sender_city')->nullable();
            $table->string('sender_state')->nullable();
            $table->string('sender_zip')->nullable();
            $table->smallInteger('sender_country')->nullable();
            $table->string('receiver_name');
            $table->string('receiver_email');
            $table->string('receiver_street')->nullable();
            $table->string('receiver_city')->nullable();
            $table->string('receiver_state')->nullable();
            $table->string('receiver_zip')->nullable();
            $table->smallInteger('receiver_country')->nullable();
            $table->string('receiver_phone')->nullable();
            $table->float('subtotal', 8, 2)->nullable()->default(0);
            $table->float('discount', 8, 2)->nullable()->default(0);
            $table->float('tax', 8, 2)->nullable()->default(0);
            $table->float('total', 8, 2)->nullable()->default(0);
            $table->text('notes')->nullable();
            $table->string('vat')->nullable();
            $table->string('bank_account')->nullable();
            $table->unsignedTinyInteger('status');
            $table->unsignedTinyInteger('invoice_template_id');
            $table->string('color')->nullable();
            $table->string('slug');
            $table->boolean('viewed')->default(0);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('invoice_template_id')->references('id')->on('invoice_templates');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
