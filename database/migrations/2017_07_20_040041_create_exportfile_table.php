<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExportfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exportfile', function (Blueprint $table) {
            $table->increments('id');
            $table->string('trungtam');
            $table->string('so');
            $table->string('bc');
            $table->string('ngay');
            $table->string('congvanso');
            $table->integer('congvan_ngay');
            $table->integer('congvan_thang');
            $table->string('congvan_nam');
            // $table->string('trungtam2');
            $table->string('m1_chungnhan_so');
            $table->string('m1_chungnhan_ngaycap');
            $table->string('m1_chungnhan_noicap');
            $table->string('m1_trusochinh');
            $table->string('m1_trusochinh_dienthoai');
            $table->string('m1_trusochinh_fax');
            $table->string('m1_trusochinh_email');
            $table->string('m1_trusochinh_website');
            $table->string('m1_loaihinhdoanhnghiep');
            $table->string('m1_thoihan');
            $table->string('m1_masothue');
            $table->bigInteger('m1_von_dieule');
            $table->bigInteger('m1_von_trungtam');
            $table->string('m1_daidien_hoten');
            $table->string('m1_daidien_quoctich');
            $table->string('m1_daidien_dtdd');
            $table->string('m1_daidien_email');
            $table->string('m1_daidien_noio');
            $table->string('m1_tentrungtam_vn');
            $table->string('m1_tentrungtam_e');
            $table->string('m1_thanhlap_so');
            $table->string('m1_thanhlap_ngaycap');
            $table->string('m1_thanhlap_noicap');
            $table->string('m1_hoatdong_so');
            $table->string('m1_hoatdong_ngaycap');
            $table->string('m1_hoatdong_noicap');
            $table->string('m1_giamdoc_hoten');
            $table->string('m1_giamdoc_quoctich');
            $table->string('m1_giamdoc_dienthoai');
            $table->string('m1_giamdoc_email');
            $table->string('m1_giamdoc_noio');
            $table->string('m1_cosodaotao');
            $table->string('m1_vuongmac');
            $table->string('m1_kiennghi');

            // M1a
            $table->smallInteger('m1a_ngoaingu');
            $table->smallInteger('m1a_tinhoc');
            $table->smallInteger('m1a_ngoaingu_tinhoc');
            $table->smallInteger('m1a_nghiepvu_chuyennganh');
            $table->string('m1a_chungnhanso_landau');
            $table->string('m1a_chungnhanngay_landau');
            $table->string('m1a_chungnhanso_hientai');
            $table->string('m1a_chungnhanngay_hientai');
            $table->string('m1a_noidung_hoatdong');
            $table->integer('m1a_giaovien_nuocngoai');
            $table->integer('m1a_giaovien_vietnam');
            $table->integer('m1a_giaovien_tong');
            $table->integer('m1a_solop');
            $table->integer('m1a_hocvien_2014');
            $table->integer('m1a_hocvien_2015');
            $table->integer('m1a_hocvien_2016');
            $table->integer('m1a_hocvien_2017');
            $table->double('m1a_hocphi_muc1');
            $table->double('m1a_hocphi_muc2');
            $table->double('m1a_hocphi_muc3');
            $table->double('m1a_hocphi_muc4');
            $table->integer('m1a_csvc_phonghoc');
            $table->integer('m1a_csvc_phongchucnang');
            $table->integer('m1a_csvc_thuvien');

            // M1b
            $table->string('m1b_hoten');
            $table->string('m1b_chucvu');
            $table->string('m1b_quoctich');
            $table->string('m1b_hochieu');
            $table->string('m1b_giaypheplaodong');
            $table->string('m1b_noio');
            $table->integer('m1b_thamnien');
            $table->text('m1b_ghichu');

            // M1c
            $table->string('m1c_hoten');
            $table->string('m1c_quoctich');
            $table->string('m1c_gioitinh');
            $table->string('m1c_trinhdo');
            $table->string('m1c_sohochieu');
            $table->string('m1c_hansudung_hochieu');
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
        Schema::dropIfExists('exportfile');
    }
}
