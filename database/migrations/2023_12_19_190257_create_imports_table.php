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
        Schema::connection('redmine')->create('imports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type')->nullable();
            $table->integer('user_id');
            $table->string('filename')->nullable();
            $table->text('settings')->nullable();
            $table->integer('total_items')->nullable();
            $table->boolean('finished')->default(false);
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('redmine')->dropIfExists('imports');
    }
};
