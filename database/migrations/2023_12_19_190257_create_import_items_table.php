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
        Schema::connection('redmine')->create('import_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('import_id');
            $table->integer('position');
            $table->integer('obj_id')->nullable();
            $table->text('message')->nullable();
            $table->string('unique_id')->nullable();

            $table->index(['import_id', 'unique_id'], 'index_import_items_on_import_id_and_unique_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('redmine')->dropIfExists('import_items');
    }
};
