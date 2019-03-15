<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlavorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flavors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->integer('additional_time');
            $table->timestamps();
        });
        DB::table('flavors')->insert(
            array(
                [ 
                'description' => 'calabresa',
                'additional_time' => '0'
                ],
                [ 
                'description' => 'marguerita',
                'additional_time' => '0'
                ],
                [ 
                'description' => 'portuguesa',
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
        Schema::dropIfExists('flavors');
    }
}
