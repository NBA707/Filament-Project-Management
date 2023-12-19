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
        Schema::connection('redmine')->create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('login')->default('');
            $table->string('hashed_password', 40)->default('');
            $table->string('firstname', 30)->default('');
            $table->string('lastname')->default('');
            $table->boolean('admin')->default(false);
            $table->integer('status')->default(1);
            $table->timestamp('last_login_on')->nullable();
            $table->string('language', 5)->nullable()->default('');
            $table->integer('auth_source_id')->nullable()->index('index_users_on_auth_source_id');
            $table->timestamp('created_on')->nullable();
            $table->timestamp('updated_on')->nullable();
            $table->string('type')->nullable()->index('index_users_on_type');
            $table->string('mail_notification')->default('');
            $table->string('salt', 64)->nullable();
            $table->boolean('must_change_passwd')->default(false);
            $table->timestamp('passwd_changed_on')->nullable();
            $table->string('twofa_scheme')->nullable();
            $table->string('twofa_totp_key')->nullable();
            $table->integer('twofa_totp_last_used_at')->nullable();
            $table->boolean('twofa_required')->nullable()->default(false);

            $table->index(['id', 'type'], 'index_users_on_id_and_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('redmine')->dropIfExists('users');
    }
};
