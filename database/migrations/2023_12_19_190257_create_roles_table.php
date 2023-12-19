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
        Schema::connection('redmine')->create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default('');
            $table->integer('position')->nullable();
            $table->boolean('assignable')->nullable()->default(true);
            $table->integer('builtin')->default(0);
            $table->text('permissions')->nullable();
            $table->string('issues_visibility', 30)->default('default');
            $table->string('users_visibility', 30)->default('all');
            $table->string('time_entries_visibility', 30)->default('all');
            $table->boolean('all_roles_managed')->default(true);
            $table->text('settings')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('redmine')->dropIfExists('roles');
    }
};
