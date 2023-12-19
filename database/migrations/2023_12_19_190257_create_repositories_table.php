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
        Schema::connection('redmine')->create('repositories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id')->default(0)->index('index_repositories_on_project_id');
            $table->string('url')->default('');
            $table->string('login', 60)->nullable()->default('');
            $table->string('password')->nullable()->default('');
            $table->string('root_url')->nullable()->default('');
            $table->string('type')->nullable();
            $table->string('path_encoding', 64)->nullable();
            $table->string('log_encoding', 64)->nullable();
            $table->text('extra_info')->nullable();
            $table->string('identifier')->nullable();
            $table->boolean('is_default')->nullable()->default(false);
            $table->timestamp('created_on')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('redmine')->dropIfExists('repositories');
    }
};
