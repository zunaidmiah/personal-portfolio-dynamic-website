<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('portfolios')){
            Schema::create('portfolios', function (Blueprint $table) {
                $table->id();
                $table->string('title', 255);
                $table->string('description', 255)->nullable();
                $table->text('technology')->nullable();
                $table->string('link', 255)->nullable();
                $table->string('created_by', 10)->nullable();
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
        Schema::dropIfExists('portfolios');
    }
}
