<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWordM1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('word_m1', function (Blueprint $table) {
            $table->increments('id');
            $table->string('trungtam');
            $table->string('so');
            $table->string('bc');
            $table->string('ngay');
            $table->string('congvanso');
            $table->integer('congvan_ngay');
            $table->integer('congvan_thang');
            $table->string('congvan_nam');
            $table->string('trungtam2');
            $table->string('chungnhan_so');
            $table->string('chungnhan_ngaycap');
            $table->string('chungnhan_noicap');
            $table->string('trusochinh');
            $table->string('trusochinh_dienthoai');
            $table->string('trusochinh_fax');
            $table->string('trusochinh_email');
            $table->string('trusochinh_website');
            $table->string('loaihinhdoanhnghiep');
            $table->string('thoihan');
            $table->string('masothue');
            $table->bigInteger('von_dieule');
            $table->bigInteger('von_trungtam');
            $table->string('daidien_hoten');
            $table->string('daidien_quoctich');
            $table->string('daidien_dtdd');
            $table->string('daidien_email');
            $table->string('daidien_noio');
            $table->string('tentrungtam_vn');
            $table->string('tentrungtam_e');
            $table->string('thanhlap_so');
            $table->string('thanhlap_ngaycap');
            $table->string('thanhlap_noicap');
            $table->string('hoatdong_so');
            $table->string('hoatdong_ngaycap');
            $table->string('hoatdong_noicap');
            $table->string('giamdoc_hoten');
            $table->string('giamdoc_quoctich');
            $table->string('giamdoc_dienthoai');
            $table->string('giamdoc_email');
            $table->string('giamdoc_noio');
            $table->string('cosodaotao');
            $table->string('vuongmac');
            $table->string('kiennghi');
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
        Schema::dropIfExists('word_m1');
    }
}
