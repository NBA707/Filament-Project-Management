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
        Schema::connection('redmine')->create('tokens', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->default(0)->index('index_tokens_on_user_id');
            $table->string('action', 30)->default('');
            $table->string('value', 40)->default('')->unique('tokens_value');
            $table->timestamp('created_on');
            $table->timestamp('updated_on')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('redmine')->dropIfExists('tokens');
    }
};
