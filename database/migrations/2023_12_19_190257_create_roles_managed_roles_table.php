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
        Schema::connection('redmine')->create('roles_managed_roles', function (Blueprint $table) {
            $table->integer('role_id');
            $table->integer('managed_role_id');

            $table->unique(['role_id', 'managed_role_id'], 'index_roles_managed_roles_on_role_id_and_managed_role_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('redmine')->dropIfExists('roles_managed_roles');
    }
};
