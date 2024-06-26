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
        Schema::create('client_posted_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('company')->nullable();
            $table->string('number_of_applicant')->nullable();
            $table->foreignId('category_id');
            $table->string('title')->nullable();
            $table->string('location')->nullable();
            $table->string('salary_range')->nullable();
            $table->longText('job_details')->nullable();
            $table->string('job_type')->nullable();
            $table->string('status')->nullable();
            $table->string('deadline')->nullable();
            $table->integer('is_approved')->nullable();
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
        Schema::dropIfExists('client_posted_jobs');
    }
};
