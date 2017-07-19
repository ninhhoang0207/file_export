<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExcelM1aModel extends Model
{
    //
	protected $table = 'excel_m1a';
	protected $guarded = array();
	protected $hidden = array('id', 'created_at', 'updated_at');
}
