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
        Schema::create('socmed_company_peoples', function (Blueprint $table) {
            $table->id();
            $table->string('account')->unique();
            $table->unsignedBigInteger('platform_socmed_id');
            $table->unsignedBigInteger('company_people_id');
            $table->timestamps();

            $table->foreign('platform_socmed_id')->references('id')->on('platform_socmeds')->onDelete('cascade');
            $table->foreign('company_people_id')->references('id')->on('company_peoples')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('socmed_company_peoples');
    }
};
