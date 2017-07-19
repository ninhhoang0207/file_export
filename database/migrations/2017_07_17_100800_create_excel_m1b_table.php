<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExcelM1bTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('excel_m1b', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tentrungtam');
            $table->string('baocaoso');
            $table->string('bc');
            $table->integer('ngay');
            $table->integer('thang');
            $table->integer('nam');
            $table->string('hoten');
            $table->string('chucvu');
            $table->string('quoctich');
            $table->string('hochieu');
            $table->string('giaypheplaodong');
            $table->string('noio');
            $table->integer('thamnien');
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
        Schema::dropIfExists('excel_m1b');
    }
}
