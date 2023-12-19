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
        Schema::connection('redmine')->create('custom_fields', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type', 30)->default('');
            $table->string('name', 30)->default('');
            $table->string('field_format', 30)->default('');
            $table->text('possible_values')->nullable();
            $table->string('regexp')->nullable()->default('');
            $table->integer('min_length')->nullable();
            $table->integer('max_length')->nullable();
            $table->boolean('is_required')->default(false);
            $table->boolean('is_for_all')->default(false);
            $table->boolean('is_filter')->default(false);
            $table->integer('position')->nullable();
            $table->boolean('searchable')->nullable()->default(false);
            $table->text('default_value')->nullable();
            $table->boolean('editable')->nullable()->default(true);
            $table->boolean('visible')->default(true);
            $table->boolean('multiple')->nullable()->default(false);
            $table->text('format_store')->nullable();
            $table->text('description')->nullable();

            $table->index(['id', 'type'], 'index_custom_fields_on_id_and_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('redmine')->dropIfExists('custom_fields');
    }
};
