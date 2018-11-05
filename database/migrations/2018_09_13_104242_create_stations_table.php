<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStationsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('stations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('subcounty_id')->unsigned()->index();
            $table->string('station_name');
            $table->timestamps();
            /*
            $table->foreign('subcounty_id')
                ->references('id')->on('subcounties')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    public function down()
    {
        Schema::dropIfExists('stations');
    }
}
