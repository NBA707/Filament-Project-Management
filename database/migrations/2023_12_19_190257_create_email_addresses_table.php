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
        Schema::connection('redmine')->create('email_addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->index('index_email_addresses_on_user_id');
            $table->string('address');
            $table->boolean('is_default')->default(false);
            $table->boolean('notify')->default(true);
            $table->timestamp('created_on');
            $table->timestamp('updated_on');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('redmine')->dropIfExists('email_addresses');
    }
};
