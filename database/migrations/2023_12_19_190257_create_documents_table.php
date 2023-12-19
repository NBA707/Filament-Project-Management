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
        Schema::connection('redmine')->create('documents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id')->default(0)->index('documents_project_id');
            $table->integer('category_id')->default(0)->index('index_documents_on_category_id');
            $table->string('title')->default('');
            $table->text('description')->nullable();
            $table->timestamp('created_on')->nullable()->index('index_documents_on_created_on');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('redmine')->dropIfExists('documents');
    }
};
