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
        Schema::connection('redmine')->create('issue_relations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('issue_from_id')->index('index_issue_relations_on_issue_from_id');
            $table->integer('issue_to_id')->index('index_issue_relations_on_issue_to_id');
            $table->string('relation_type')->default('');
            $table->integer('delay')->nullable();

            $table->unique(['issue_from_id', 'issue_to_id'], 'index_issue_relations_on_issue_from_id_and_issue_to_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('redmine')->dropIfExists('issue_relations');
    }
};
