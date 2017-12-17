<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Medical extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('medicals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('passport');
            $table->string('dob');
            $table->string('gender');
            $table->string('inherited');
            $table->string('allergy');
            $table->string('mental');
            $table->string('stroke');
            $table->string('diabetes');
            $table->string('hypertension');
            $table->string('vascular');
            $table->string('ashtma');
            $table->string('aids');
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
        //
        Schema::dropIfExists('medicals');
    }

    
}
