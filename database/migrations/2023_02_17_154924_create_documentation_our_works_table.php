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
        Schema::create('documentation_our_works', function (Blueprint $table) {
            $table->id();
            $table->string('photo')->unique();
            $table->unsignedBigInteger('our_service_id');
            $table->timestamps();

            $table->foreign('our_service_id')->references('id')->on('our_services')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documentation_our_works');
    }
};
