<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('cases', function (Blueprint $table) {
            $table->integer('patient_id')->index()->unsigned();
            $table->string('sample_id');
            $table->integer('preliminary_result_id')->index()->unsigned();
            $table->integer('sample_location_id')->index()->unsigned();
            $table->integer('final_result_id')->index()->unsigned();
            $table->integer('user_id')->index()->unsigned();
            $table->integer('station_id')->index()->unsigned();

            $table->foreign('patient_id')->references('id')->on('patients')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('sample_id')->references('sample_id')->on('samples')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('preliminary_result_id')->references('id')->on('preliminary_statuses')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('sample_location_id')->references('id')->on('sample_locations')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('final_result_id')->references('id')->on('final_statuses')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('station_id')->references('id')->on('stations')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    public function down()
    {
        Schema::dropIfExists('cases');
    }
}
