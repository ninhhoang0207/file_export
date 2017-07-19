<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddExcelM1aTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('excel_m1a', function (Blueprint $table) {
            //
            $table->string('baocaoso');
            $table->string('bc');
            $table->string('ngay');
            $table->string('thang');
            $table->string('nam');
            $table->string('tentrungtam');
            $table->string('diachi');
            $table->string('email');
            $table->string('dienthoai');
            $table->smallInteger('ngoaingu');
            $table->smallInteger('tinhoc');
            $table->smallInteger('ngoaingu_tinhoc');
            $table->smallInteger('nghiepvu_chuyennganh');
            $table->string('chungnhan_landau');
            $table->string('chungnhan_hientai');
            $table->string('noidung_hoatdong');
            $table->integer('giaovien_nuocngoai');
            $table->integer('giaovien_vietnam');
            $table->integer('giaovien_tong');
            $table->integer('solop');
            $table->integer('hocvien_2014');
            $table->integer('hocvien_2015');
            $table->integer('hocvien_2016');
            $table->integer('hocvien_2017');
            $table->double('hocphi_muc1');
            $table->double('hocphi_muc2');
            $table->double('hocphi_muc3');
            $table->double('hocphi_muc4');
            $table->integer('csvc_phonghoc');
            $table->integer('csvc_phongchucnang');
            $table->integer('csvc_thuvien');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('excel_m1a', function (Blueprint $table) {
            //
        });
    }
}
