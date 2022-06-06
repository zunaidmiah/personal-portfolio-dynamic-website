<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecomendationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('recomendations')){
            Schema::create('recomendations', function (Blueprint $table) {
                $table->id();
                $table->string('name', 255);
                $table->string('email', 255)->nullable();
                $table->text('message');
                $table->string('star', 5);
                $table->integer('is_hidden')->default(0);
                $table->integer('is_deleted')->default(0);
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
        Schema::dropIfExists('recomendations');
    }
}
