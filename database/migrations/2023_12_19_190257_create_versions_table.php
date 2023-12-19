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
        Schema::connection('redmine')->create('versions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id')->default(0)->index('versions_project_id');
            $table->string('name')->default('');
            $table->string('description')->nullable()->default('');
            $table->date('effective_date')->nullable();
            $table->timestamp('created_on')->nullable();
            $table->timestamp('updated_on')->nullable();
            $table->string('wiki_page_title')->nullable();
            $table->string('status')->nullable()->default('open');
            $table->string('sharing')->default('none')->index('index_versions_on_sharing');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('redmine')->dropIfExists('versions');
    }
};
