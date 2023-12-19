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
        Schema::connection('redmine')->create('wiki_contents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('page_id')->index('wiki_contents_page_id');
            $table->integer('author_id')->nullable()->index('index_wiki_contents_on_author_id');
            $table->text('text')->nullable();
            $table->string('comments', 1024)->nullable()->default('');
            $table->timestamp('updated_on');
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
        Schema::connection('redmine')->dropIfExists('wiki_contents');
    }
};
