<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDbSewa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_db_sewa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_customer');
            $table->int('no_telp',15)->unique();
            $table->string('email')->unique();
            $table->string('alamat');
            $table->string('kota');
            $table->string('add_request');
            $table->date('check_in');
            $table->date('check_out');
            $table->enum('pesanan', ['auditorium', 'laboratorium','meetings']);
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
        Schema::dropIfExists('table_db_sewa');
    }
}
