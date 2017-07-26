<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImployeeInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_info', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id');
            $table->string('hoten');
            $table->string('gioitinh');
            $table->string('chucvu');
            $table->string('trinhdo');
            $table->string('quoctich');
            $table->string('hochieu_so')->nullable();
            $table->date('hochieu_hansudung')->nullable();
            $table->string('visa_so')->nullable();
            $table->date('visa_hansudung')->nullable();
            $table->string('thamnien');
            $table->string('bangcap');
            $table->string('giayphep_so');
            $table->date('giayphep_thoihan');
            $table->string('giayphep_lamviec');
            $table->string('giayphep_cutru');
            $table->string('hopdong_thoihan');
            $table->string('hopdong_tructiep');
            $table->string('hopdong_tendonvi');
            $table->integer('hopdong_sogiogiangday');
            $table->string('tentruong');
            $table->string('quanhuyen');
            $table->integer('solop');
            $table->integer('sohocsinh');
            $table->integer('sotiethoc');
            $table->integer('tyle_gvnn');
            $table->string('cocau_gvnn');
            $table->text('ghichu')->nullable();
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
        Schema::dropIfExists('employee_info');
    }
}
