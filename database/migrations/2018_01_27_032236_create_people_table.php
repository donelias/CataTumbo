<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('type_people')->onDelete('cascade')->onUpdate('cascade');
            $table->string('identity')->unique();
            $table->string('name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone_nomber')->nullable();
            $table->string('cellphone')->nullable();
            $table->text('address')->nullable();
            $table->integer('sector_id')->unsigned();
            $table->foreign('sector_id')->references('id')->on('sectors')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('role_id')->unsigned();
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('status_id')->unsigned();
            $table->foreign('status_id')->references('id')->on('status')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('people');
    }
}
