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
        Schema::connection('redmine')->create('changesets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('repository_id')->index('index_changesets_on_repository_id');
            $table->string('revision');
            $table->string('committer')->nullable();
            $table->timestamp('committed_on')->index('index_changesets_on_committed_on');
            $table->text('comments')->nullable();
            $table->date('commit_date')->nullable();
            $table->string('scmid')->nullable();
            $table->integer('user_id')->nullable()->index('index_changesets_on_user_id');

            $table->unique(['repository_id', 'revision'], 'changesets_repos_rev');
            $table->index(['repository_id', 'scmid'], 'changesets_repos_scmid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('redmine')->dropIfExists('changesets');
    }
};
