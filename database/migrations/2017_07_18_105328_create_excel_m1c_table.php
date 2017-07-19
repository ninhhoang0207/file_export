<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExcelM1cTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('excel_m1c', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tentrungtam');
            $table->string('baocaoso');
            $table->string('bc');
            $table->integer('ngay');
            $table->integer('thang');
            $table->integer('nam');
            $table->string('hoten');
            $table->string('quoctich');
            $table->string('gioitinh');
            $table->string('trinhdo');
            $table->string('sohochieu');
            $table->string('hansudung_hochieu');
            $table->string('sovisa');
            $table->string('hansudung_visa');
            $table->string('so_giayphep');
            $table->string('thoihan_giayphep');
            $table->string('diachi_giayphep');
            $table->string('diachi_cutru');
            $table->string('thoihan_laodong');
            $table->string('tructiep');
            $table->string('tendonvi');
            $table->integer('sogiogiangday');
            $table->text('ghichu');
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
        Schema::dropIfExists('excel_m1c');
    }
}
