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
        Schema::connection('redmine')->create('wiki_redirects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('wiki_id')->index('index_wiki_redirects_on_wiki_id');
            $table->string('title')->nullable();
            $table->string('redirects_to')->nullable();
            $table->timestamp('created_on');
            $table->integer('redirects_to_wiki_id');

            $table->index(['wiki_id', 'title'], 'wiki_redirects_wiki_id_title');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('redmine')->dropIfExists('wiki_redirects');
    }
};
