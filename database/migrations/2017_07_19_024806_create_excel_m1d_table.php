<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExcelM1dTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('excel_m1d', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tentrungtam');
            $table->string('baocaoso');
            $table->string('bc');
            $table->integer('ngay');
            $table->integer('thang');
            $table->integer('nam');
            $table->string('tentruong');
            $table->string('quanhuyen');
            $table->integer('solop');
            $table->integer('sohocsinh');
            $table->integer('sotiethoc');
            $table->integer('tyle_gvnn');
            $table->integer('cocau_gvnn');
            $table->string('ten_gvnn');
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
        Schema::dropIfExists('excel_m1d');
    }
}
