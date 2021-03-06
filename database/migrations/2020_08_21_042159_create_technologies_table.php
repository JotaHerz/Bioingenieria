<?php

use App\Constants\TechnologyRisks;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechnologiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technologies', function (Blueprint $table) {
            $table->id();
            $table->string('active');
            $table->string('serie');
            $table->string('mark');
            $table->string('model');
            $table->string('location');
            $table->enum('risk', TechnologyRisks::toArray())->nullable();
            $table->string('url_document')->nullable();
            $table->date('date_mant')->nullable();
            $table->date('next_mant')->nullable();
            $table->date('date_cal')->nullable();
            $table->date('next_cal')->nullable();
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
        Schema::dropIfExists('technologies');
    }
}
