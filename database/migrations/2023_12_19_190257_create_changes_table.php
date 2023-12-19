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
        Schema::connection('redmine')->create('changes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('changeset_id')->index('changesets_changeset_id');
            $table->string('action', 1)->default('');
            $table->text('path');
            $table->text('from_path')->nullable();
            $table->string('from_revision')->nullable();
            $table->string('revision')->nullable();
            $table->string('branch')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('redmine')->dropIfExists('changes');
    }
};
