<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('short_name')->unique();
            $table->string('address', 500);
            $table->integer('pin');
            $table->string('contact_person');
            $table->string('phone', 15);
            $table->string('fax', 15)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('tngst', 15);
            $table->string('cst', 15);
            $table->integer('party_type_id', false, true);
            $table->integer('party_group_id', false, true);
            $table->string('remarks', 500)->nullable();
            $table->tinyInteger('status')->default(1);
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
        Schema::drop('parties');
    }
}
