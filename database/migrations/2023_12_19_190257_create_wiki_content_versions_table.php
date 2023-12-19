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
        Schema::connection('redmine')->create('wiki_content_versions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('wiki_content_id')->index('wiki_content_versions_wcid');
            $table->integer('page_id');
            $table->integer('author_id')->nullable();
            $table->binary('data')->nullable();
            $table->string('compression', 6)->nullable()->default('');
            $table->string('comments', 1024)->nullable()->default('');
            $table->timestamp('updated_on')->index('index_wiki_content_versions_on_updated_on');
            $table->integer('version');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('redmine')->dropIfExists('wiki_content_versions');
    }
};
