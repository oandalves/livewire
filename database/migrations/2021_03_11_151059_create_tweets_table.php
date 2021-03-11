<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTweetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tweets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('content');
            $table->timestamps();

            $table->integer('user_id')
                ->unsigned()->nullable();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        $data = array(
            array(
                'user_id' => '1',
                'content' => 'Alvejou a militância da mulher fenotipicamente negra com o intuito egoístico que transcendem a normalidade dos fatos. Julgou o caráter da mulher fenotipicamente negra ressignificando a conversa com inverdades.'
            )
        );
        \DB::table('tweets')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tweets');
    }
}
