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
        Schema::connection('redmine')->create('auth_sources', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type', 30)->default('');
            $table->string('name', 60)->default('');
            $table->string('host', 60)->nullable();
            $table->integer('port')->nullable();
            $table->string('account')->nullable();
            $table->string('account_password')->nullable()->default('');
            $table->string('base_dn')->nullable();
            $table->string('attr_login', 30)->nullable();
            $table->string('attr_firstname', 30)->nullable();
            $table->string('attr_lastname', 30)->nullable();
            $table->string('attr_mail', 30)->nullable();
            $table->boolean('onthefly_register')->default(false);
            $table->boolean('tls')->default(false);
            $table->text('filter')->nullable();
            $table->integer('timeout')->nullable();
            $table->boolean('verify_peer')->default(true);

            $table->index(['id', 'type'], 'index_auth_sources_on_id_and_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('redmine')->dropIfExists('auth_sources');
    }
};
