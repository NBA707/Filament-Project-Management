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
        Schema::connection('redmine')->create('member_roles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('member_id')->index('index_member_roles_on_member_id');
            $table->integer('role_id')->index('index_member_roles_on_role_id');
            $table->integer('inherited_from')->nullable()->index('index_member_roles_on_inherited_from');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('redmine')->dropIfExists('member_roles');
    }
};
