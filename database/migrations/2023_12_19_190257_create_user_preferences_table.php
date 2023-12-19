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
        Schema::connection('redmine')->create('user_preferences', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->default(0)->index('index_user_preferences_on_user_id');
            $table->text('others')->nullable();
            $table->boolean('hide_mail')->nullable()->default(true);
            $table->string('time_zone')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('redmine')->dropIfExists('user_preferences');
    }
};
