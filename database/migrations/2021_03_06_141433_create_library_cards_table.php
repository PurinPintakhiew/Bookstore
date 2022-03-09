<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibraryCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('library_cards', function (Blueprint $table) {
            $table->id();
            $table->string('cus_name');
            $table->string('ID_Book');
            $table->string('Borrowed_date');
            $table->string('Return_date');
            $table->integer('Fines');
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
        Schema::dropIfExists('library_cards');
    }
}
