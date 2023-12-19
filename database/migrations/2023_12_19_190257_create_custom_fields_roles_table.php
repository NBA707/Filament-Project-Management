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
        Schema::connection('redmine')->create('custom_fields_roles', function (Blueprint $table) {
            $table->integer('custom_field_id');
            $table->integer('role_id');

            $table->unique(['custom_field_id', 'role_id'], 'custom_fields_roles_ids');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('redmine')->dropIfExists('custom_fields_roles');
    }
};
