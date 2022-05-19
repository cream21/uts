<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Createmidsemesters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('midsemesters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kolom_judul',20);
            $table->text('kolom_isi');
            $table->string('kolom_penulis',20); 
            $table->text('kolom_keterangan');
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
        Schema::dropIfExists('utslab');
    }
}
