<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePariwisatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pariwisatas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_pariwisata');
            $table->string('alamat_pariwisata');
            $table->text('detail_pariwisata');
            $table->string('gambar_pariwisata');
            $table->string('maps');
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
        Schema::dropIfExists('pariwisatas');
    }
}
