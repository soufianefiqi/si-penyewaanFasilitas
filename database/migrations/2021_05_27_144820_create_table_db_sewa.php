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
            $table->string('no_telp',15);
            $table->string('email');
            $table->string('alamat')->nullable();
            $table->string('kota')->nullable();
            $table->string('add_request')->nullable();
            $table->date('check_in');
            $table->date('check_out');
            $table->enum('pesanan', ['auditorium', 'laboratorium','meetings']);
            $table->enum('pembayaran', ['mandiri', 'BCA','BNI']);
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
