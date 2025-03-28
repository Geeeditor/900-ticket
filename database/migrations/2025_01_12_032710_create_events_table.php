<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->date('date');
            $table->time('time');
            $table->string('location');
            $table->text('description');
            $table->string('hero_image');
            $table->string('map_link')->nullable();
            $table->foreignId('user_id')->constrained('users');
            $table->integer('ticket_price');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('events');
    }
}
