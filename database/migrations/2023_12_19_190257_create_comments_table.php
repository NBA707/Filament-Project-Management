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
        Schema::connection('redmine')->create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('commented_type', 30)->default('');
            $table->integer('commented_id')->default(0);
            $table->integer('author_id')->default(0)->index('index_comments_on_author_id');
            $table->text('content')->nullable();
            $table->timestamp('created_on');
            $table->timestamp('updated_on');

            $table->index(['commented_id', 'commented_type'], 'index_comments_on_commented_id_and_commented_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('redmine')->dropIfExists('comments');
    }
};
