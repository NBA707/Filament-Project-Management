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
        Schema::connection('redmine')->create('watchers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('watchable_type')->default('');
            $table->integer('watchable_id')->default(0);
            $table->integer('user_id')->nullable()->index('index_watchers_on_user_id');

            $table->index(['watchable_id', 'watchable_type'], 'index_watchers_on_watchable_id_and_watchable_type');
            $table->index(['user_id', 'watchable_type'], 'watchers_user_id_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('redmine')->dropIfExists('watchers');
    }
};
