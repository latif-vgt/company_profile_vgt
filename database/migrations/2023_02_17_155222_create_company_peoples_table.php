<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_peoples', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('photo')->unique();
            $table->unsignedBigInteger('role_company_people_id');
            $table->timestamps();

            $table->foreign('role_company_people_id')->references('id')->on('role_company_peoples')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_peoples');
    }
};
