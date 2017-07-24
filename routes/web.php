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

// Route::get('','ExportExcelController@show')->name('home');
Route::get('','ExportFileController@list_word')->name('home');
Route::get('export-doc-m1','ExportDocController@index')->name('doc.index');
Route::post('export-doc-m1','ExportDocController@post')->name('doc.post');
Route::get('do-export-doc-m1','ExportDocController@export')->name('doc.export');
Route::get('show-doc-m1','ExportDocController@show')->name('doc.show');
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
Route::get('test','ExportExcelController@test');
Route::get('company-info','ExportFileController@index');
Route::post('company-info','ExportFileController@export_company_info');
Route::get('company-info-preview/{id}','ExportFileController@word_preview')->name('word.companyPreview');
Route::get('company-info-list','ExportFileController@list_word');
Route::get('company-info-convert-doc','ExportFileController@export_company_info1')->name('doc.convert');
// Route::get('employee-info','ExportFileController@index2');
Route::get('company-info-edit/{id}','ExportFileController@edit')->name('doc.edit');
Route::post('company-info-edit/{id}','ExportFileController@update')->name('doc.update');