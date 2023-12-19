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
        Schema::connection('redmine')->create('projects_trackers', function (Blueprint $table) {
            $table->integer('project_id')->default(0)->index('projects_trackers_project_id');
            $table->integer('tracker_id')->default(0);

            $table->unique(['project_id', 'tracker_id'], 'projects_trackers_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('redmine')->dropIfExists('projects_trackers');
    }
};
