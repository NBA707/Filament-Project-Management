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
        Schema::connection('redmine')->create('changesets_issues', function (Blueprint $table) {
            $table->integer('changeset_id');
            $table->integer('issue_id')->index('index_changesets_issues_on_issue_id');

            $table->unique(['changeset_id', 'issue_id'], 'changesets_issues_ids');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('redmine')->dropIfExists('changesets_issues');
    }
};
