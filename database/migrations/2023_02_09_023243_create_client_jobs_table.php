<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('client_jobs', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('category_id');
        //     $table->string('title')->nullable();
        //     $table->string('location_id')->nullable();
        //     $table->string('deadline')->nullable();
        //     $table->string('salary_range')->nullable();
        //     $table->longText('job_details')->nullable();
        //     $table->string('company')->nullable();
        //     $table->string('job_type')->nullable();
        //     $table->string('logo')->nullable();
        //     $table->string('status')->nullable();
        //     $table->integer('views')->nullable();
        //     $table->integer('applicants')->nullable();
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_jobs');
    }
};
