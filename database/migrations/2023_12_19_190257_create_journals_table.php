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
        Schema::connection('redmine')->create('journals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('journalized_id')->default(0)->index('index_journals_on_journalized_id');
            $table->string('journalized_type', 30)->default('');
            $table->integer('user_id')->default(0)->index('index_journals_on_user_id');
            $table->text('notes')->nullable();
            $table->timestamp('created_on')->index('index_journals_on_created_on');
            $table->boolean('private_notes')->default(false);

            $table->index(['journalized_id', 'journalized_type'], 'journals_journalized_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('redmine')->dropIfExists('journals');
    }
};
