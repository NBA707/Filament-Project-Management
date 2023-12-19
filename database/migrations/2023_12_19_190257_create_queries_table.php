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
        Schema::connection('redmine')->create('queries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id')->nullable()->index('index_queries_on_project_id');
            $table->string('name')->default('');
            $table->text('filters')->nullable();
            $table->integer('user_id')->default(0)->index('index_queries_on_user_id');
            $table->text('column_names')->nullable();
            $table->text('sort_criteria')->nullable();
            $table->string('group_by')->nullable();
            $table->string('type')->nullable();
            $table->integer('visibility')->nullable()->default(0);
            $table->text('options')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('redmine')->dropIfExists('queries');
    }
};
