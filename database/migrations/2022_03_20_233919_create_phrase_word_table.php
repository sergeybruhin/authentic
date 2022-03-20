<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhraseWordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phrase_word', function (Blueprint $table) {
            $table->id();
            $table->foreignId('phrase_id')->constrained();
            $table->foreignId('word_id')->constrained();
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
        Schema::table('phrase_word', function (Blueprint $table) {
            $table->dropForeign(['phrase_id']);
            $table->dropForeign(['word_id']);
        });
        Schema::dropIfExists('phrase_word');
    }
}
