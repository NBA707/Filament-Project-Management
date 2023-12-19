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
        Schema::connection('redmine')->create('custom_values', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customized_type', 30)->default('');
            $table->integer('customized_id')->default(0);
            $table->integer('custom_field_id')->default(0)->index('index_custom_values_on_custom_field_id');
            $table->text('value')->nullable();

            $table->index(['customized_type', 'customized_id'], 'custom_values_customized');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('redmine')->dropIfExists('custom_values');
    }
};
