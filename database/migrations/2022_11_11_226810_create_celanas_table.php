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
        Schema::create('celanas', function (Blueprint $table) {
            $table->id();
            $table->string('nama',30);
            $table->string('foto');
            $table->string('ukuran',20);
            $table->string('warna',50);
            $table->integer('jumlah');
            $table->string('status');
            $table->foreignId("model_celana_id");
            $table->foreignId("supplier_id");
            $table->timestamps();
            $table->foreign("model_celana_id")->references("id")->on("model_celanas");
            $table->foreign("supplier_id")->references("id")->on("suppliers");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('celanas');
    }
};
