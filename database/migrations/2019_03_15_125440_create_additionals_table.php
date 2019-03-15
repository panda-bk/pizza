<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdditionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('additionals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->string('value');
            $table->integer('additional_time');
            $table->timestamps();
        });
        DB::table('additionals')->insert(
            array(
                [ 
                    'description' => 'extra bacon',
                    'value' => '3',
                    'additional_time' => '0'
                ],
                [ 
                    'description' => 'sem cebola',
                    'value' => '0',
                    'additional_time' => '0'
                ],
                [ 
                    'description' => 'Borda Recheada',
                    'value' => '5',
                    'additional_time' => '5'
                ]
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('additionals');
    }
}
