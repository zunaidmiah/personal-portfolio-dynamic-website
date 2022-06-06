<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('media')){
            Schema::create('media', function (Blueprint $table) {
                $table->id();
                $table->string('type', 100)->nullable();
                $table->string('link')->nullable();
                $table->string('rel_id', 10);
                $table->integer('is_hidden')->default(0);
                $table->integer('is_deleted')->default(0);
                $table->string('created_by', 10)->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('media');
    }
}
