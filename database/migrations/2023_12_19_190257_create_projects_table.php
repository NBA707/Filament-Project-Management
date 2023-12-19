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
        Schema::connection('redmine')->create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default('');
            $table->text('description')->nullable();
            $table->string('homepage')->nullable()->default('');
            $table->boolean('is_public')->default(true);
            $table->integer('parent_id')->nullable();
            $table->timestamp('created_on')->nullable();
            $table->timestamp('updated_on')->nullable();
            $table->string('identifier')->nullable();
            $table->integer('status')->default(1);
            $table->integer('lft')->nullable()->index('index_projects_on_lft');
            $table->integer('rgt')->nullable()->index('index_projects_on_rgt');
            $table->boolean('inherit_members')->default(false);
            $table->integer('default_version_id')->nullable();
            $table->integer('default_assigned_to_id')->nullable();
            $table->integer('default_issue_query_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('redmine')->dropIfExists('projects');
    }
};
