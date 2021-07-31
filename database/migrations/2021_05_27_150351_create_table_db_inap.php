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
            $table->char('no_telp',15);
            $table->string('email');
            $table->string('alamat')->nullable();
            $table->string('kota')->nullable();
            $table->date('check_in');
            $table->date('check_out');
            $table->integer('kamar');
            $table->integer('tamu');
            $table->enum('pesanan', ['VIP', 'standard']);
            $table->enum('pembayaran', ['mandiri', 'BCA', 'BNI']);
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
