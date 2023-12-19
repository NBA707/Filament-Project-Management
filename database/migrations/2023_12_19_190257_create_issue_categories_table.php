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
        Schema::connection('redmine')->create('issue_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id')->default(0)->index('issue_categories_project_id');
            $table->string('name', 60)->default('');
            $table->integer('assigned_to_id')->nullable()->index('index_issue_categories_on_assigned_to_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('redmine')->dropIfExists('issue_categories');
    }
};
