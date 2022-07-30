<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChecklistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checklists', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('attire')->nullable();
            $table->string('make_up')->nullable();
            $table->string('venue')->nullable();
            $table->string('bakery')->nullable();
            $table->string('decoration')->nullable();
            $table->string('catering')->nullable();
            $table->string('jewellery')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checklists');
    }
}
