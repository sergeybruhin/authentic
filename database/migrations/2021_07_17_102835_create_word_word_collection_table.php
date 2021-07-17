<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWordWordCollectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('word_word_collection', function (Blueprint $table) {
            $table->id();
            $table->foreignId('word_id')->constrained();
            $table->foreignId('word_collection_id')->constrained();
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
        Schema::table('word_word_collection', function(Blueprint $table) {
            $table->dropForeign('word_id');
            $table->dropForeign('word_collection_id');
        });
        Schema::dropIfExists('word_word_collection');
    }
}
