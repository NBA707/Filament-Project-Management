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
        Schema::connection('redmine')->create('journal_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('journal_id')->default(0)->index('journal_details_journal_id');
            $table->string('property', 30)->default('');
            $table->string('prop_key', 30)->default('');
            $table->text('old_value')->nullable();
            $table->text('value')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('redmine')->dropIfExists('journal_details');
    }
};
