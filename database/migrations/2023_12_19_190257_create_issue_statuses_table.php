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
        Schema::connection('redmine')->create('issue_statuses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 30)->default('');
            $table->boolean('is_closed')->default(false)->index('index_issue_statuses_on_is_closed');
            $table->integer('position')->nullable()->index('index_issue_statuses_on_position');
            $table->integer('default_done_ratio')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('redmine')->dropIfExists('issue_statuses');
    }
};
