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
        Schema::connection('redmine')->create('boards', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id')->index('boards_project_id');
            $table->string('name')->default('');
            $table->string('description')->nullable();
            $table->integer('position')->nullable();
            $table->integer('topics_count')->default(0);
            $table->integer('messages_count')->default(0);
            $table->integer('last_message_id')->nullable()->index('index_boards_on_last_message_id');
            $table->integer('parent_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('redmine')->dropIfExists('boards');
    }
};
