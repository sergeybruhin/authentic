<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhrasePhraseCollectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phrase_phrase_collection', function (Blueprint $table) {
            $table->id();
            $table->foreignId('phrase_id')->constrained();
            $table->foreignId('phrase_collection_id')->constrained();
            $table->integer('order')->default(0);
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
        Schema::table('phrase_phrase_collection', function (Blueprint $table) {
            $table->dropForeign(['phrase_id']);
            $table->dropForeign(['phrase_collection_id']);
        });
        Schema::dropIfExists('phrase_phrase_collection');
    }
}
