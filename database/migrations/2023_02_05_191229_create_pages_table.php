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
        // Schema::create('pages', function (Blueprint $table) {
        //     $table->id();
        //     $table->integer('sub_menu_id')->nullable();
        //     $table->integer('menu_id')->nullable();
        //     $table->string('title')->nullable();
        //     $table->longText('contents')->nullable();
        //     $table->longText('metas')->nullable();
        //     $table->string('links')->nullable();
        //     $table->integer('status')->nullable();
        //     $table->string('slug')->nullable();
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
        // Schema::dropIfExists('pages');
    }
};
