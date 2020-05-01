<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKindsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kinds', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('size');
            $table->double('price');
            $table->unsignedBigInteger('pizza_id')->unsigned();
            $table->foreign('pizza_id')->references('id')->on('pizzas')->onDelete('cascade');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::table('kinds',function (Blueprint $table){
    		$table->dropForeign('kinds_pizza_id_foreign');
	    });
        Schema::dropIfExists('kinds');
    }
}
