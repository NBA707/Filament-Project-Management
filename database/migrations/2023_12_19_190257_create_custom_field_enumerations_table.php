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
        Schema::connection('redmine')->create('custom_field_enumerations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('custom_field_id');
            $table->string('name');
            $table->boolean('active')->default(true);
            $table->integer('position')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('redmine')->dropIfExists('custom_field_enumerations');
    }
};
