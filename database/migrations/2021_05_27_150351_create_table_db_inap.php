<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDbInap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_db_inap', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_customer');
            $table->char('no_telp',15)->unique();
            $table->string('email')->unique();
            $table->string('alamat');
            $table->string('kota');
            $table->date('check_in');
            $table->date('check_out');
            $table->enum('pesanan', ['VIP', 'standard']);
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
        Schema::dropIfExists('table_db_inap');
    }
}
