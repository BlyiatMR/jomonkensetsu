<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_forms', function (Blueprint $table) {
            $table->id();
            $table->string('company', 255);
            $table->string('code', 100);
            $table->string('name', 255);
            $table->string('phone', 17);
            $table->string('email', 255);
            $table->string('subject', 510);
            $table->text('content');
            $table->boolean('is_readed')->default(0);
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
        Schema::dropIfExists('contact_forms');
    }
}
