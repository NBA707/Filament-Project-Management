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
        Schema::connection('redmine')->create('enumerations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 30)->default('');
            $table->integer('position')->nullable();
            $table->boolean('is_default')->default(false);
            $table->string('type')->nullable();
            $table->boolean('active')->default(true);
            $table->integer('project_id')->nullable()->index('index_enumerations_on_project_id');
            $table->integer('parent_id')->nullable();
            $table->string('position_name', 30)->nullable();

            $table->index(['id', 'type'], 'index_enumerations_on_id_and_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('redmine')->dropIfExists('enumerations');
    }
};
