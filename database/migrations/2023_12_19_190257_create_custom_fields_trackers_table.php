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
        Schema::connection('redmine')->create('custom_fields_trackers', function (Blueprint $table) {
            $table->integer('custom_field_id')->default(0);
            $table->integer('tracker_id')->default(0);

            $table->unique(['custom_field_id', 'tracker_id'], 'index_custom_fields_trackers_on_custom_field_id_and_tracker_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('redmine')->dropIfExists('custom_fields_trackers');
    }
};
