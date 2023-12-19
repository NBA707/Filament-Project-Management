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
        Schema::connection('redmine')->create('time_entries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id')->index('time_entries_project_id');
            $table->integer('user_id')->index('index_time_entries_on_user_id');
            $table->integer('issue_id')->nullable()->index('time_entries_issue_id');
            $table->float('hours', 0, 0);
            $table->string('comments', 1024)->nullable();
            $table->integer('activity_id')->index('index_time_entries_on_activity_id');
            $table->date('spent_on');
            $table->integer('tyear');
            $table->integer('tmonth');
            $table->integer('tweek');
            $table->timestamp('created_on')->index('index_time_entries_on_created_on');
            $table->timestamp('updated_on');
            $table->integer('author_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('redmine')->dropIfExists('time_entries');
    }
};
