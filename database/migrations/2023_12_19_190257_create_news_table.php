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
        Schema::connection('redmine')->create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id')->nullable()->index('news_project_id');
            $table->string('title', 60)->default('');
            $table->string('summary')->nullable()->default('');
            $table->text('description')->nullable();
            $table->integer('author_id')->default(0)->index('index_news_on_author_id');
            $table->timestamp('created_on')->nullable()->index('index_news_on_created_on');
            $table->integer('comments_count')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('redmine')->dropIfExists('news');
    }
};
