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
        Schema::connection('redmine')->create('changeset_parents', function (Blueprint $table) {
            $table->integer('changeset_id')->index('changeset_parents_changeset_ids');
            $table->integer('parent_id')->index('changeset_parents_parent_ids');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('redmine')->dropIfExists('changeset_parents');
    }
};
