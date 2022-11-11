<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sepatus', function (Blueprint $table) {
            $table->id();
            $table->string('nama',30);
            $table->string('foto');
            $table->string('ukuran',20);
            $table->string('warna',50);
            $table->integer('jumlah');
            $table->foreignId("model_sepatu_id");
            $table->foreignId("supplier_id");
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
        Schema::dropIfExists('sepatus');
    }
};
