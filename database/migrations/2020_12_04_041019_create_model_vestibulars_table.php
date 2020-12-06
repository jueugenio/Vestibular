<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelVestibularsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vestibular', function (Blueprint $table) {
             $table->id();
            $table->string('inst');
            $table->string('site');
            $table->integer('ano');
            $table->longText('mat');
            $table->longText('gram');
             $table->longText('lit');
              $table->longText('texto');
                 $table->longText('ing');
                 $table->string('bio');
                    $table->longText('fis');
                       $table->longText('quim');
                          $table->longText('hist');
                            $table->longText('geo');  
                             $table->longText('socio');
                        
            $table->rememberToken();
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
        Schema::dropIfExists('model_vestibulars');
    }
}
