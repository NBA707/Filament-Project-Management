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
        Schema::connection('redmine')->create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->default(0)->index('index_members_on_user_id');
            $table->integer('project_id')->default(0)->index('index_members_on_project_id');
            $table->timestamp('created_on')->nullable();
            $table->boolean('mail_notification')->default(false);

            $table->unique(['user_id', 'project_id'], 'index_members_on_user_id_and_project_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('redmine')->dropIfExists('members');
    }
};
