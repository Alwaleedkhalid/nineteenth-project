<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id'); // unsignedInteger  == $table->integer('')->unsigned();
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->enum('status', array('in process', 'rejected', 'done'))->default('in process');	
            $table->timestamps();
            
            
            ////
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

        });

        // DB::table('roles')->insert(array(
        //     array('name' => 'user'),
        //     array('name' => 'admin'),
        //     ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
}
