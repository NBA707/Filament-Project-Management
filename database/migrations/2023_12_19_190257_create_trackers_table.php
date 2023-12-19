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
        Schema::connection('redmine')->create('trackers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 30)->default('');
            $table->integer('position')->nullable();
            $table->boolean('is_in_roadmap')->default(true);
            $table->integer('fields_bits')->nullable()->default(0);
            $table->integer('default_status_id')->nullable();
            $table->string('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('redmine')->dropIfExists('trackers');
    }
};
