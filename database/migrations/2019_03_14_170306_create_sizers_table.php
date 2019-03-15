<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSizersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sizers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->string('size');
            $table->double('value');
            $table->integer('preparation_time');
            $table->timestamps();
        });

        DB::table('sizers')->insert(
            array(
                [ 
                'description' => 'pequena',
                'size' => 'p',
                'value' => '20.00',
                'preparation_time' =>'15'
                ],
                [ 
                'description' => 'média',
                'size' => 'm',
                'value' => '30.00',
                'preparation_time' =>'20'
                ],
                [                
                'description' => 'grande',
                'size' => 'g',
                'value' => '40.00',
                'preparation_time' =>'25'
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
        Schema::dropIfExists('sizers');
    }
}
