<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('','ExportExcelController@show')->name('excel');
Route::get('export-doc-m1','ExportDocController@index')->name('doc.index');
Route::post('export-doc-m1','ExportDocController@post')->name('doc.post');
Route::get('do-export-doc-m1','ExportDocController@export')->name('doc.export');
Route::get('export-excel-m1a','ExportExcelController@index_a')->name('excel.indexA');
Route::post('export-excel-m1a','ExportExcelController@post_a')->name('excel.postA');
Route::get('do-export-excel-m1a','ExportExcelController@export_m1a')->name('excel.exportA');
Route::get('export-excel-m1b','ExportExcelController@index_b')->name('excel.indexB');
Route::post('export-excel-m1b','ExportExcelController@post_b')->name('excel.postB');
Route::get('do-export-excel-m1b','ExportExcelController@export_m1b')->name('excel.exportB');
Route::get('export-excel-m1b-show','ExportExcelController@show_b')->name('excel.showB');
Route::get('export-excel-m1c','ExportExcelController@index_c')->name('excel.indexC');
Route::post('export-excel-m1c','ExportExcelController@post_c')->name('excel.postC');
Route::get('do-export-excel-m1c','ExportExcelController@export_m1c')->name('excel.exportC');
Route::get('export-excel-m1d','ExportExcelController@index_d')->name('excel.indexD');
Route::post('export-excel-m1d','ExportExcelController@post_d')->name('excel.postD');
Route::get('do-export-excel-m1d','ExportExcelController@export_m1d')->name('excel.exportD');