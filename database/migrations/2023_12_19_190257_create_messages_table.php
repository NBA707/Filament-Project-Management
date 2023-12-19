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
        Schema::connection('redmine')->create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('board_id')->index('messages_board_id');
            $table->integer('parent_id')->nullable()->index('messages_parent_id');
            $table->string('subject')->default('');
            $table->text('content')->nullable();
            $table->integer('author_id')->nullable()->index('index_messages_on_author_id');
            $table->integer('replies_count')->default(0);
            $table->integer('last_reply_id')->nullable()->index('index_messages_on_last_reply_id');
            $table->timestamp('created_on')->index('index_messages_on_created_on');
            $table->timestamp('updated_on');
            $table->boolean('locked')->nullable()->default(false);
            $table->integer('sticky')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('redmine')->dropIfExists('messages');
    }
};
