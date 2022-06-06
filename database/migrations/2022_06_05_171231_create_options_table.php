<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('options')){
            Schema::create('options', function (Blueprint $table) {
                $table->id();
                $table->string('option_key', 255);
                $table->string('option_value', 255)->nullable();
                $table->string('option_group', 255)->nullable();
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
        Schema::dropIfExists('options');
    }
}
