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
        Schema::connection('redmine')->create('attachments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('container_id')->nullable();
            $table->string('container_type', 30)->nullable();
            $table->string('filename')->default('');
            $table->string('disk_filename')->default('')->index('index_attachments_on_disk_filename');
            $table->bigInteger('filesize')->default(0);
            $table->string('content_type')->nullable()->default('');
            $table->string('digest', 64)->default('');
            $table->integer('downloads')->default(0);
            $table->integer('author_id')->default(0)->index('index_attachments_on_author_id');
            $table->timestamp('created_on')->nullable()->index('index_attachments_on_created_on');
            $table->string('description')->nullable();
            $table->string('disk_directory')->nullable();

            $table->index(['container_id', 'container_type'], 'index_attachments_on_container_id_and_container_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('redmine')->dropIfExists('attachments');
    }
};
