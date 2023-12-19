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
        Schema::connection('redmine')->create('wiki_pages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('wiki_id')->index('index_wiki_pages_on_wiki_id');
            $table->string('title');
            $table->timestamp('created_on');
            $table->boolean('protected')->default(false);
            $table->integer('parent_id')->nullable()->index('index_wiki_pages_on_parent_id');

            $table->index(['wiki_id', 'title'], 'wiki_pages_wiki_id_title');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('redmine')->dropIfExists('wiki_pages');
    }
};
