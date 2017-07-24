<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_info', function (Blueprint $table) {
            $table->increments('id');
            $table->string('trungtam');
            $table->string('so');
            $table->string('bc');
            $table->string('ngay');
            $table->string('thang');
            $table->string('nam');
            $table->string('congvan_so');
            $table->integer('congvan_ngay');
            $table->integer('congvan_thang');
            $table->integer('congvan_nam');
            $table->string('chungnhan_so');
            $table->date('chungnhan_ngaycap');
            $table->string('chungnhan_noicap');
            $table->string('trusochinh_diachi');
            $table->string('trusochinh_dienthoai');
            $table->string('trusochinh_fax');
            $table->string('trusochinh_email');
            $table->string('trusochinh_website');
            $table->string('loaihinhdoanhnghiep');
            $table->string('thoihan_hoatdong');
            $table->string('masothue');
            $table->double('von_dieule');
            $table->double('von_trungtam');
            $table->string('daidien_hoten');
            $table->string('daidien_quoctich');
            $table->string('daidien_dtdd');
            $table->string('daidien_email');
            $table->string('daidien_noio');
            $table->string('tentrungtam_vn');
            $table->string('tentrungtam_e');
            $table->string('thanhlap_so');
            $table->date('thanhlap_ngaycap');
            $table->string('thanhlap_noicap');
            $table->string('thanhlap_so2')->nullable();
            $table->date('thanhlap_ngaycap2')->nullable();
            $table->string('thanhlap_noicap2')->nullable();
            $table->string('hoatdong_so');
            $table->date('hoatdong_ngaycap');
            $table->string('hoatdong_noicap');
            $table->string('hoatdong_so2')->nullable();
            $table->date('hoatdong_ngaycap2')->nullable();
            $table->string('hoatdong_noicap2')->nullable();
            $table->string('giamdoc_hoten');
            $table->string('giamdoc_quoctich');
            $table->string('giamdoc_dienthoai');
            $table->string('giamdoc_email');
            $table->string('giamdoc_noio');
            $table->string('cosodaotao');
            $table->string('noidung_hoatdong')->nullable();
            $table->text('vuongmac')->nullable();
            $table->text('kiennghi')->nullable();
            $table->smallInteger('loaihinh_ngoaingu')->default(0);
            $table->smallInteger('loaihinh_tinhoc')->default(0);
            $table->smallInteger('loaihinh_ngoaingu_tinhoc')->default(0);
            $table->smallInteger('loaihinh_nghiepvu_chuyennganh')->default(0);
            $table->integer('solop')->default(0);
            $table->integer('hocvien_2014')->nullable();
            $table->integer('hocvien_2015')->nullable();
            $table->integer('hocvien_2016')->nullable();
            $table->integer('hocvien_2017')->nullable();
            $table->double('hocphi_muc1')->nullable();
            $table->double('hocphi_muc2')->nullable();
            $table->double('hocphi_muc3')->nullable();
            $table->double('hocphi_muc4')->nullable();
            $table->integer('csvc_phonghoc')->default(0);
            $table->integer('csvc_phongchucnang')->default(0);
            $table->integer('csvc_thuvien')->default(0);
            $table->string('ten_tep');
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
        Schema::dropIfExists('company_info');
    }
}
