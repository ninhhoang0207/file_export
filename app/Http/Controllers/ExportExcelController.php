<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\ExcelM1aModel;
use App\ExcelM1bModel;
use App\ExcelM1cModel;
use App\ExcelM1dModel;
use DB;

class ExportExcelController extends Controller
{
	 //
	public function index_a() {
		return view('fontend.excel.index_a');
	}

	public function show() {
		return view('fontend.excel.show');
	}

	public function index_b() {
		return view('fontend.excel.index_b');
	}

	public function index_c() {
		return view('fontend.excel.index_c');
	}

	public function index_d() {
		return view('fontend.excel.index_d');
	}

	public function post_a(Request $request) {
		$data = $request->except('_token');
		$loaihinh = $data['loaihinh'];
		unset($data['loaihinh']);
		$data['ngoaingu'] = 0;
		$data['tinhoc']	= 0;
		$data['ngoaingu_tinhoc'] = 0;
		$data['nghiepvu_chuyennganh'] = 0;
		foreach ($loaihinh as $key => $value) {
			$data[$value] = 1;
		}
		$save = ExcelM1aModel::create($data);

		return view('fontend.excel.show');
	}

	public function post_b(Request $request) {
		$data = $request->except('_token');
		$save = ExcelM1bModel::create($data);

		return view('fontend.excel.show');
	}

	public function export_m1a(Request $request) {
		$selected_field = $this->selected_field_a();
		$data_header = ExcelM1aModel::where('id','>',0)->get(['tentrungtam','baocaoso','bc','ngay','thang','nam'])->first();
		$data = ExcelM1aModel::where('id','>',0)->get($selected_field);

		if (isset($data_header))
			$data_header = $data_header->toArray();
		else 
			return 'Data is not found';
		if (isset($data))
			$data = $data->toArray();
		else 
			return 'Data is not found';

		Excel::create('m1a_excel', function($excel) use ($data,$data_header) {
			$excel->sheet('sheet_m1a', function($sheet) use ($data,$data_header) {
				// Default Custom
				$sheet->setOrientation('landscape');
				$sheet->setTitle('M1a');
				$sheet->setFontFamily('Times New Roman');
				$sheet->setFontSize(11);
				$sheet->setAutoSize(false);
				$range = (count($data)+7);
				$sheet->setBorder('A5:Z'.$range, 'thin');
				//Insert text
				$sheet->appendRow(1, array(
					'ĐƠN VỊ CHỦ QUẢN',
					));
				$sheet->appendRow(2, array(
					'TRUNG TÂM: '.strtoupper($data_header['tentrungtam']),
					));
				$sheet->appendRow(3, array(
					'BÁO CÁO THỐNG KÊ SỐ LIỆU ĐỐI VỚI CÁC TRUNG TÂM'
					));
				$sheet->appendRow(4, array(
					'(Kèm theo Báo cáo số: '.$data_header['baocaoso'].' /BC '.$data_header['bc'].', ngày '.$data_header['ngay'].' tháng  '.$data_header['thang'].' năm  '.$data_header['nam'].' )'
					));
				$sheet->appendRow(5, array(
					'Tên trung tâm: ',
					'Địa chỉ các cơ sở đào tạo',
					'Địa chỉ Email',
					'Điện thoại',
					'Loại hình',
					'','','',
					'Giấy chứng nhận hoạt động',
					'',
					'Nội dung được phép hoạt đông',
					'Tổng số giáo viên',
					'','',
					'Học viên',
					'','','','',
					'Các mức học phí/khóa(Đơn vị 1000 VNĐ)',
					'','','',
					'Thống Kê CSVC',
					'','',
					));
				$sheet->appendRow(6, array(
					'','','','',
					'NN',
					'TH',
					'N-T',
					'NV-CN',
					'Số/ngày cấp lần đầu',
					'Số/ngày cấp GP hiện tại',
					'',
					'NN',
					'VN',
					'Tổng',
					'Số lớp 2017',
					'Số HV',
					'','','',
					'Mức 1',
					'Mức 2',
					'Mức 3',
					'Mức 4',
					'Tổng số phòng học',
					'Tổng số phòng chức năng',
					'Thư viện',
					));
				$sheet->appendRow(7, array(
					'','','','','','','','','','','','','','','',
					'2014',
					'2015',
					'2016',
					'2017',
					));
			
				 /*
				//Set style row and column
				*/
				$sheet->mergeCells('A3:Z3');
				$sheet->mergeCells('A4:Z4');
				$sheet->mergeCells('E5:H5');
				$sheet->mergeCells('I5:J5');
				$sheet->mergeCells('L5:N5');
				$sheet->mergeCells('O5:S5');
				$sheet->mergeCells('T5:W5');
				$sheet->mergeCells('X5:Z5');
				$sheet->mergeCells('P6:S6');
				$sheet->setMergeColumn(array(
				 	'columns' => array('A','B','C','D','K'),
				 	'rows' => array(
				 		array(5,7),
				 		)
				 	));
				$sheet->setMergeColumn(array(
				 	'columns' => array('E','F','G','H','I','J','L','M','N','O','T','U','V','W','X','Y','Z'),
				 	'rows' => array(
				 		array(6,7),
				 		)
				 	));
				$sheet->setMergeColumn(array(
				 	'columns' => array('E','F','G','H','I','J','L','M','N','O','T','U','V','W','X','Y','Z'),
				 	'rows' => array(
				 		array(6,7),
				 		)
				 	));
				$sheet->cell('A1:A2', function($cell) {
					$cell->setFont(array(
						'bold'       =>  true
						));
				});
				$sheet->cell('A3:Z'.$range, function($cell) {
					$cell->setAlignment('center');
					$cell->setValignment('center');
					$cell->setFont([
						'size'	=>	12,
						'bold'	=>	false,
						]);
				});
				$sheet->cell('A3:Z3', function($cell) {
					$cell->setFont(array(
						'size'      => '16',
						'bold'      =>  true
						));
				});
				$sheet->cell('A4:Z4', function($cell) {
					$cell->setFont(array(
						'italic'    =>  true
						));
				});
				$sheet->cell('A5:Z5', function($cell) {
					$cell->setFont(array(
						'bold'       =>  true
						));
				});
				$sheet->cell('A6:Z6', function($cell) {
					$cell->setFont(array(
						'bold'       =>  true
						));
				});
				$sheet->setHeight(array(
					5     =>	50,
					6     =>	50,
					));
				//Set wrap text
				$sheet->getStyle('A5:Z'.$range)->getAlignment()->setWrapText(true);
				//Insert data
				$sheet->fromArray($data, null, 'A8',false,false);
			});
		})->store('xls', public_path('excel/exports'));

		return view('fontend.excel.index_exported_a');
	}

	public function export_m1b(Request $request) {
		$selected_field = $this->selected_field_b();
		$data = ExcelM1bModel::where('id','>',0)->get($selected_field);
		$data_header = ExcelM1bModel::find(1)->get(['tentrungtam','baocaoso','bc','ngay','thang','nam'])->first();

		if (isset($data_header))
			$data_header = $data_header->toArray();
		else 
			return 'Data is not found';
		if (isset($data))
			$data = $data->toArray();
		else 
			return 'Data is not found';

		Excel::create('m1b_excel', function($excel) use ($data, $data_header) {
			$excel->sheet('sheet_m1b', function($sheet) use ($data, $data_header) {
				// Default Custom
				$sheet->setOrientation('landscape');
				$sheet->setFontFamily('Times New Roman');
				$sheet->setFontBold(true);
				$sheet->setFontSize(12);
				$sheet->setAutoSize(false);
				$range = 8+count($data);
				$sheet->setBorder('A7:T'.$range, 'thin');
				//Insert text
				$sheet->appendRow(1, array(
					'ĐƠN VỊ CHỦ QUẢN',
					));
				$sheet->appendRow(2, array(
					'TRUNG TÂM: '.strtoupper($data_header['tentrungtam']),
					));
				$sheet->appendRow(4, ['BÁO CÁO DANH SÁCH, THÔNG TIN VÀ HỒ SƠ ĐỐI VỚI ĐỘI NGŨ CÁN BỘ, GIÁO VIÊN LÀM VIỆC TẠI TRUNG TÂM']);
				$sheet->appendRow(5, ['(Kèm theo báo cáo số  '.$data_header['baocaoso'].' /BC  '.$data_header['ngay'].' thang  '.$data_header['thang'].' năm  '.$data_header['nam'].'  )']);
				$sheet->appendRow(7, array(
					'TT',
					'Họ và tên',
					'Năm sinh','',
					'Chức vụ, nhiệm vụ','','','',
					'Trình độ','','','','','',
					'Đối với cán bộ, giáo viên, nhân viên lao động người nước ngoài','','','',
					'Thâm niên công tác',
					'Ghi chú',
					));
				$sheet->appendRow(8,array(
					'','','Nam','Nữ',
					'Quản lý','GV hữu cơ','GV thỉnh giảng','Tình nguyện viên',
					'Chuyên ngành được đào tạo',
					'Trên đại học',
					'Đại học',
					'Cao đẳng',
					'Ngoại ngữ',
					'Tên chứng chỉ nghiệp vụ sư phạm',
					'Quốc tịch',
					'Số hộ chiếu',
					'Số giấy phép LĐ',
					'Nơi ở hiện tại',
					'Thâm niên công tác(Ghi số năm công tác)',
					));
				/*
				//Set style row and column
				*/
				$sheet->mergeCells('A4:P4');
				$sheet->mergeCells('A5:P5');
				$sheet->mergeCells('C7:D7');
				$sheet->mergeCells('E7:H7');
				$sheet->mergeCells('I7:N7');
				$sheet->mergeCells('O7:R7');
				$sheet->setMergeColumn([
					'columns'	=>	['A','B','S','T'],
					'rows'=>	[[7,8]],
					]);

				$sheet->setHeight([
					7	=>	50,
					8	=>	50,
					]);
				$sheet->setWidth(array(
					'B'	=>	30,
					'O'	=>	25,
					'P'	=>	25,
					'Q'	=>	25,
					'R'	=>	25,
					'T'	=>	25,
					));
				/*
				//Set style text each colums and rows
				*/
				$sheet->getStyle('A7:Z'.$range)->getAlignment()->setWrapText(true);
				$sheet->cell('A3:Z30', function($cell) {
					$cell->setAlignment('center');
					$cell->setValignment('center');
					$cell->setFont(['size'	=>	12]);
				});
				$sheet->cell('A1:A8', function($cell) {
					$cell->setFont([
						'bold'	=>	true,
						'size'	=>	11,
						]);
				});
				$sheet->cell('A5', function($cell) {
					$cell->setFont([
						'bold'	=>	false,
						'italic'	=>	true,
						]);
				});
				$sheet->cell('S7:T7', function($cell) {
					$cell->setFontSize(10);
				});	
				$sheet->cell('C8:R8', function($cell) {
					$cell->setFontSize(10);
				});
				$sheet->cell('A9:T'.$range, function($cell) {
					$cell->setFont([
						'bold'	=>	false,
						]);
				});
				//Insert Data
				$data_insert = array();
				foreach ($data as $key => $value) {
					$temp = [];
					array_push($temp, $key, $value['hoten']);	
					($value['gioitinh'] == 'nam')?array_push($temp,'1',''):array_push($temp, '','1');
					switch ($value['chucvu']) {
						case 'quanly':
						array_push($temp, '1','','','');
						break;
						case 'gv_huuco':
						array_push($temp, '','1','','');
						break;
						case 'gv_thinhgian':
						array_push($temp, '','','1','');
						break;
						default:
						array_push($temp, '','','','1');
						break;
					}
					switch ($value['trinhdo']) {
						case 'chuyennganh':
						array_push($temp, '1','','','','','');
						break;
						case 'trendaihoc':
						array_push($temp, '','1','','','','');
						break;
						case 'daihoc':
						array_push($temp, '','','1','','','');
						break;
						case 'caodang':
						array_push($temp, '','','','1','','');
						break;
						case 'ngoaingu':
						array_push($temp, '','','','','1','');
						break;
						default:
						array_push($temp, '','','','','','1');
						break;
				}
				array_push($temp, $value['quoctich'], $value['hochieu'], $value['giaypheplaodong'], $value['noio'], $value['thamnien'], $value['ghichu']);
				array_push($data_insert, $temp);
				}
				$sheet->fromArray($data_insert, null, 'A9', null, null);
			});//End of sheet
		})->store('xls', public_path('excel/exports'));//End of Excel create file
		
		return view('fontend.excel.index_exported_b');
	}

	public function post_c(Request $request) {
		$data = $request->except('_token');
		$save = ExcelM1cModel::create($data);
		
		return view('fontend.excel.show');
	}


	public function export_m1c(Request $request) {
		$selected_field = $this->selected_field_c();
		$data = ExcelM1cModel::where('id','>',0)->get($selected_field);
		$data_header = ExcelM1cModel::where('id','>',0)->get(['tentrungtam','baocaoso','bc','ngay','thang','nam'])->first();

		if (isset($data_header))
			$data_header = $data_header->toArray();
		else 
			return 'Data is not found';
		if (isset($data))
			$data = $data->toArray();
		else 
			return 'Data is not found';

		Excel::Create('m1c_excel', function($excel) use($data, $data_header) {
			$excel->sheet('sheet_m1c', function($sheet) use($data, $data_header) {
				$sheet->setOrientation('landscape');
				$sheet->setFontFamily('Times New Roman');
				$sheet->setFontSize(12);
				$sheet->setAutoSize(false);
				$range = count($data)+7;
				$sheet->setBorder('A6:T'.$range);
				/*
				Create table
				*/
				$sheet->appendRow(1, array(
					'ĐƠN VỊ CHỦ QUẢN',
					));
				$sheet->appendRow(2, array(
					'TRUNG TÂM: '.strtoupper($data_header['tentrungtam']),
					));
				$sheet->appendRow(3, ['BÁO CÁO DANH SÁCH, THÔNG TIN VÀ HỒ SƠ ĐỐI VỚI LAO ĐỘNG NƯỚC NGOÀI CỦA TRUNG TÂM HIỆN ĐANG GIẢNG DẠY TẠI CÁC TRƯỜNG HỌC CỦA HÀ NỘI ']);
				$sheet->appendRow(4, ['(Kèm theo báo cáo số  '.$data_header['baocaoso'].' /BC  '.$data_header['ngay'].' thang  '.$data_header['thang'].' năm  '.$data_header['nam'].'  )']);
				$sheet->appendRow(6, [
					'TT',
					'Họ và tên',
					'Quốc tịch',
					'Năm sinh','',
					'Trình độ, bằng cấp','',
					'Thông tin hộ chiếu, visa','','','',
					'Thông tin Giấy phép lao động','','','',
					'Hợp đồng lao động','','','',
					'Ghi chú',
					]);
				$sheet->appendRow(7,[
					'','','',
					'Nam',
					'Nữ',
					'Chuyên môn',
					'Ngoại ngữ',
					'Số HC',
					'Ngày hết hạn HC',
					'Số thẻ tạm chú/visa',
					'Thời hạn tạm chú/visa',
					'Số',
					'Thời hạn',
					'Địa chỉ nơi làm việc',
					'Địa chỉ cư chú',
					'Thời hạn',
					'Trực tiếp',
					'Thông qua đơn vị cung cấp khóa học (Ghi rõ Tên đơn vị)',
					'Số giờ phân công giảng dạy',
					]);
				/*
				Merge Rows and Colums
				*/
				$sheet->setMergeColumn(array(
					'columns'	=>	['A','B','C','T'],
					'rows'		=>	[[6,7]],
					));
				$sheet->mergeCells('A4:S4');
				$sheet->mergeCells('D6:E6');
				$sheet->mergeCells('F6:G6');
				$sheet->mergeCells('H6:K6');
				$sheet->mergeCells('L6:O6');
				$sheet->mergeCells('P6:S6');
				/*
				Style Rows and Colums
				*/
				$sheet->getStyle('A6:Z'.$range)->getAlignment()->setWrapText(true);
				$sheet->cell('A4:Z'.$range, function($cell) {
					$cell->setAlignment('center');
					$cell->setValignment('center');
				});
				$sheet->cell('A1:Z7', function($cell) {
					$cell->setFont([
						'bold'	=> true,
						]);
				});
				$sheet->cell('A4', function($cell) {
					$cell->setFont([
						'bold'		=>	false,
						'italic'		=>	true,
						]);
				});
				/*
				Insert Data 
				*/
				$insert_data = [];
				foreach ($data as $key => $value) {
					$temp = [];
					array_push($temp, $key+1, $value['hoten'], $value['quoctich']);
					($value['gioitinh']=='nam')?array_push($temp, '1',''):array_push($temp, '','1');
					($value['trinhdo']=='chuyenmon')?array_push($temp, '1',''):array_push($temp, '','1');
					array_push($temp, 
						$value['sohochieu'], 
						$value['hansudung_hochieu'], 
						$value['sovisa'], 
						$value['hansudung_visa'], 
						$value['so_giayphep'], 
						$value['thoihan_giayphep'], 
						$value['diachi_giayphep'], 
						$value['diachi_cutru'], 
						$value['thoihan_laodong'], 
						$value['tructiep'], 
						$value['tendonvi'], 
						$value['sogiogiangday'], 
						$value['ghichu']
						);
					array_push($insert_data, $temp);
				}
				$sheet->fromArray($insert_data, null, 'A8',false,false);
				// $sheet->appendRow(13, $insert_data2);
			});//End of sheet
		})->store('xls', public_path('excel/exports'));//End of Excel
		
		return view('fontend.excel.index_exported_c');
	}

	public function post_d(Request $request) {
		$data = $request->except('_token');
		$save = ExcelM1dModel::create($data);
		
		return view('fontend.excel.show');
	}

	public function export_m1d() {
		$selected_field = $this->selected_field_d();
		$data = ExcelM1dModel::where('id','>',0)->get($selected_field);
		// $data_header = ::where('id','>',0)->get(['tentrungtam','baocaoso','bc','ngay','thang','nam']);
		Excel::Create('m1d_excel', function($excel) use($data, $selected_field) {
			$excel->sheet('sheet_m1d', function($sheet) use($data, $selected_field) {
				$sheet->setOrientation('landscape');
				$sheet->setAutoSize(false);
				$sheet->setFontFamily('Times New Roman');
				$range = count($data)+2;
				$sheet->setBorder('A1:J'.$range,'thin');
				/*
				//Append Row
				*/
				$sheet->appendRow(1,[
					'TT',
					'Thông tin về trường tiếp nhận','','','','','','',
					'Tên GVNN được phân công',
					'Ghi chú',
					]);
				$sheet->appendRow(2,[
					'',
					'Tên trường',
					'Quận/Huyện',
					'Số lớp',
					'Tổng số hs',
					'Số tiết học/tháng',
					'Tỷ lệ % GVNN',
					'Cơ cấu GVNN',
					'Tên GVNN được phân công',
					]);	
				/*
				//Merge row and column
				*/
				$sheet->setMergeColumn([
					'columns'	=>	['A','I','J'],
					'rows'		=>	[
						[1,2],
						]
					]);
				$sheet->mergeCells('B1:H1');
				/*
				//Style row and column
				*/
				$sheet->getStyle('A1:Z'.$range)->getAlignment()->setWrapText(true);
				$sheet->cells('A1:Z'.$range, function($cell) {
					$cell->setAlignment('center');
					$cell->setValignment('center');
				});
				$sheet->cells('A1:J2', function($cell) {
					$cell->setFont([
						'bold'	=>	true,
						]);
				});
				/*
				//Insert data
				*/
				$insert_data = [];
				foreach ($data as $key => $value) {
					$temp = [];
					array_push($temp, $key+1);
					foreach ($selected_field as $val) {
						array_push($temp, $value->$val);
					}
					array_push($insert_data, $temp);
				}
				$sheet->fromArray($insert_data,null,'A3',false,false);
			});//End sheet
		})->store('xls', public_path('excel/exports'));//End Excel

		return view('fontend.excel.index_exported_d');
	}

	private function selected_field_a() {
		return array(
			'tentrungtam',
			'diachi',
			'email',
			'dienthoai',
			'ngoaingu',
			'tinhoc',
			'ngoaingu_tinhoc',
			'nghiepvu_chuyennganh',
			'chungnhan_landau',
			'chungnhan_hientai',
			'noidung_hoatdong',
			'giaovien_nuocngoai',
			'giaovien_vietnam',
			'giaovien_tong',
			'solop',
			'hocvien_2014',
			'hocvien_2015',
			'hocvien_2016',
			'hocvien_2017',
			'hocphi_muc1',
			'hocphi_muc2',
			'hocphi_muc3',
			'hocphi_muc4',
			'csvc_phonghoc',
			'csvc_phongchucnang',
			'csvc_thuvien',
			);
	}

	private function selected_field_b() {
		return array(
			'hoten',
			'gioitinh',
			'chucvu',
			'trinhdo',
			'quoctich',
			'hochieu',
			'giaypheplaodong',
			'noio',
			'thamnien',
			'ghichu',
			);
	}

	private function selected_field_c() {
		return array(
			'hoten',
			'quoctich',
			'gioitinh',
			'trinhdo',
			'sohochieu',
			'hansudung_hochieu',
			'sovisa',
			'hansudung_visa',
			'so_giayphep',
			'thoihan_giayphep',
			'diachi_giayphep',
			'diachi_cutru',
			'thoihan_laodong',
			'tructiep',
			'tendonvi',
			'sogiogiangday',
			'ghichu',
			);
	}

	private function selected_field_d() {
		return array(
			'tentruong',
			'quanhuyen',
			'solop',
			'sohocsinh',
			'sotiethoc',
			'tyle_gvnn',
			'cocau_gvnn',
			'ten_gvnn',
			'ghichu',
			);
	}

	public function test() {
		Excel::create('multisheet', function($excel) {
			$excel->sheet('m1a', function($sheet) {
				$selected_field = $this->selected_field_a();
				$data_header = ExcelM1aModel::where('id','>',0)->get(['tentrungtam','baocaoso','bc','ngay','thang','nam'])->first();
				$data = ExcelM1aModel::where('id','>',0)->get($selected_field);

				if (isset($data_header))
					$data_header = $data_header->toArray();
				else 
					return 'Data is not found';
				if (isset($data))
					$data = $data->toArray();
				else 
					return 'Data is not found';
				// Default Custom
				$sheet->setOrientation('landscape');
				$sheet->setTitle('M1a');
				$sheet->setFontFamily('Times New Roman');
				$sheet->setFontSize(11);
				$sheet->setAutoSize(false);
				$range = (count($data)+7);
				$sheet->setBorder('A5:Z'.$range, 'thin');
				//Insert text
				$sheet->appendRow(1, array(
					'ĐƠN VỊ CHỦ QUẢN',
					));
				$sheet->appendRow(2, array(
					'TRUNG TÂM: '.strtoupper($data_header['tentrungtam']),
					));
				$sheet->appendRow(3, array(
					'BÁO CÁO THỐNG KÊ SỐ LIỆU ĐỐI VỚI CÁC TRUNG TÂM'
					));
				$sheet->appendRow(4, array(
					'(Kèm theo Báo cáo số: '.$data_header['baocaoso'].' /BC '.$data_header['bc'].', ngày '.$data_header['ngay'].' tháng  '.$data_header['thang'].' năm  '.$data_header['nam'].' )'
					));
				$sheet->appendRow(5, array(
					'Tên trung tâm: ',
					'Địa chỉ các cơ sở đào tạo',
					'Địa chỉ Email',
					'Điện thoại',
					'Loại hình',
					'','','',
					'Giấy chứng nhận hoạt động',
					'',
					'Nội dung được phép hoạt đông',
					'Tổng số giáo viên',
					'','',
					'Học viên',
					'','','','',
					'Các mức học phí/khóa(Đơn vị 1000 VNĐ)',
					'','','',
					'Thống Kê CSVC',
					'','',
					));
				$sheet->appendRow(6, array(
					'','','','',
					'NN',
					'TH',
					'N-T',
					'NV-CN',
					'Số/ngày cấp lần đầu',
					'Số/ngày cấp GP hiện tại',
					'',
					'NN',
					'VN',
					'Tổng',
					'Số lớp 2017',
					'Số HV',
					'','','',
					'Mức 1',
					'Mức 2',
					'Mức 3',
					'Mức 4',
					'Tổng số phòng học',
					'Tổng số phòng chức năng',
					'Thư viện',
					));
				$sheet->appendRow(7, array(
					'','','','','','','','','','','','','','','',
					'2014',
					'2015',
					'2016',
					'2017',
					));
			
				 /*
				//Set style row and column
				*/
				$sheet->mergeCells('A3:Z3');
				$sheet->mergeCells('A4:Z4');
				$sheet->mergeCells('E5:H5');
				$sheet->mergeCells('I5:J5');
				$sheet->mergeCells('L5:N5');
				$sheet->mergeCells('O5:S5');
				$sheet->mergeCells('T5:W5');
				$sheet->mergeCells('X5:Z5');
				$sheet->mergeCells('P6:S6');
				$sheet->setMergeColumn(array(
				 	'columns' => array('A','B','C','D','K'),
				 	'rows' => array(
				 		array(5,7),
				 		)
				 	));
				$sheet->setMergeColumn(array(
				 	'columns' => array('E','F','G','H','I','J','L','M','N','O','T','U','V','W','X','Y','Z'),
				 	'rows' => array(
				 		array(6,7),
				 		)
				 	));
				$sheet->setMergeColumn(array(
				 	'columns' => array('E','F','G','H','I','J','L','M','N','O','T','U','V','W','X','Y','Z'),
				 	'rows' => array(
				 		array(6,7),
				 		)
				 	));
				$sheet->cell('A1:A2', function($cell) {
					$cell->setFont(array(
						'bold'       =>  true
						));
				});
				$sheet->cell('A3:Z'.$range, function($cell) {
					$cell->setAlignment('center');
					$cell->setValignment('center');
					$cell->setFont([
						'size'	=>	12,
						'bold'	=>	false,
						]);
				});
				$sheet->cell('A3:Z3', function($cell) {
					$cell->setFont(array(
						'size'      => '16',
						'bold'      =>  true
						));
				});
				$sheet->cell('A4:Z4', function($cell) {
					$cell->setFont(array(
						'italic'    =>  true
						));
				});
				$sheet->cell('A5:Z5', function($cell) {
					$cell->setFont(array(
						'bold'       =>  true
						));
				});
				$sheet->cell('A6:Z6', function($cell) {
					$cell->setFont(array(
						'bold'       =>  true
						));
				});
				$sheet->setHeight(array(
					5     =>	50,
					6     =>	50,
					));
				//Set wrap text
				$sheet->getStyle('A5:Z'.$range)->getAlignment()->setWrapText(true);
				//Insert data
				$sheet->fromArray($data, null, 'A8',false,false);
			});
$excel->sheet('m1b', function($sheet) {
	$selected_field = $this->selected_field_b();
	$data = ExcelM1bModel::where('id','>',0)->get($selected_field);
	$data_header = ExcelM1bModel::find(1)->get(['tentrungtam','baocaoso','bc','ngay','thang','nam'])->first();

	if (isset($data_header))
		$data_header = $data_header->toArray();
	else 
		return 'Data is not found';
	if (isset($data))
		$data = $data->toArray();
	else 
		return 'Data is not found';

				// Default Custom
	$sheet->setOrientation('landscape');
	$sheet->setFontFamily('Times New Roman');
	$sheet->setFontBold(true);
	$sheet->setFontSize(12);
	$sheet->setAutoSize(false);
	$range = 8+count($data);
	$sheet->setBorder('A7:T'.$range, 'thin');
				//Insert text
	$sheet->appendRow(1, array(
		'ĐƠN VỊ CHỦ QUẢN',
		));
	$sheet->appendRow(2, array(
		'TRUNG TÂM: '.strtoupper($data_header['tentrungtam']),
		));
	$sheet->appendRow(4, ['BÁO CÁO DANH SÁCH, THÔNG TIN VÀ HỒ SƠ ĐỐI VỚI ĐỘI NGŨ CÁN BỘ, GIÁO VIÊN LÀM VIỆC TẠI TRUNG TÂM']);
	$sheet->appendRow(5, ['(Kèm theo báo cáo số  '.$data_header['baocaoso'].' /BC  '.$data_header['ngay'].' thang  '.$data_header['thang'].' năm  '.$data_header['nam'].'  )']);
	$sheet->appendRow(7, array(
		'TT',
		'Họ và tên',
		'Năm sinh','',
		'Chức vụ, nhiệm vụ','','','',
		'Trình độ','','','','','',
		'Đối với cán bộ, giáo viên, nhân viên lao động người nước ngoài','','','',
		'Thâm niên công tác',
		'Ghi chú',
		));
	$sheet->appendRow(8,array(
		'','','Nam','Nữ',
		'Quản lý','GV hữu cơ','GV thỉnh giảng','Tình nguyện viên',
		'Chuyên ngành được đào tạo',
		'Trên đại học',
		'Đại học',
		'Cao đẳng',
		'Ngoại ngữ',
		'Tên chứng chỉ nghiệp vụ sư phạm',
		'Quốc tịch',
		'Số hộ chiếu',
		'Số giấy phép LĐ',
		'Nơi ở hiện tại',
		'Thâm niên công tác(Ghi số năm công tác)',
		));
				/*
				//Set style row and column
				*/
				$sheet->mergeCells('A4:P4');
				$sheet->mergeCells('A5:P5');
				$sheet->mergeCells('C7:D7');
				$sheet->mergeCells('E7:H7');
				$sheet->mergeCells('I7:N7');
				$sheet->mergeCells('O7:R7');
				$sheet->setMergeColumn([
					'columns'	=>	['A','B','S','T'],
					'rows'=>	[[7,8]],
					]);

				$sheet->setHeight([
					7	=>	50,
					8	=>	50,
					]);
				$sheet->setWidth(array(
					'B'	=>	30,
					'O'	=>	25,
					'P'	=>	25,
					'Q'	=>	25,
					'R'	=>	25,
					'T'	=>	25,
					));
				/*
				//Set style text each colums and rows
				*/
				$sheet->getStyle('A7:Z'.$range)->getAlignment()->setWrapText(true);
				$sheet->cell('A3:Z30', function($cell) {
					$cell->setAlignment('center');
					$cell->setValignment('center');
					$cell->setFont(['size'	=>	12]);
				});
				$sheet->cell('A1:A8', function($cell) {
					$cell->setFont([
						'bold'	=>	true,
						'size'	=>	11,
						]);
				});
				$sheet->cell('A5', function($cell) {
					$cell->setFont([
						'bold'	=>	false,
						'italic'	=>	true,
						]);
				});
				$sheet->cell('S7:T7', function($cell) {
					$cell->setFontSize(10);
				});	
				$sheet->cell('C8:R8', function($cell) {
					$cell->setFontSize(10);
				});
				$sheet->cell('A9:T'.$range, function($cell) {
					$cell->setFont([
						'bold'	=>	false,
						]);
				});
				//Insert Data
				$data_insert = array();
				foreach ($data as $key => $value) {
					$temp = [];
					array_push($temp, $key, $value['hoten']);	
					($value['gioitinh'] == 'nam')?array_push($temp,'1',''):array_push($temp, '','1');
					switch ($value['chucvu']) {
						case 'quanly':
						array_push($temp, '1','','','');
						break;
						case 'gv_huuco':
						array_push($temp, '','1','','');
						break;
						case 'gv_thinhgian':
						array_push($temp, '','','1','');
						break;
						default:
						array_push($temp, '','','','1');
						break;
					}
					switch ($value['trinhdo']) {
						case 'chuyennganh':
						array_push($temp, '1','','','','','');
						break;
						case 'trendaihoc':
						array_push($temp, '','1','','','','');
						break;
						case 'daihoc':
						array_push($temp, '','','1','','','');
						break;
						case 'caodang':
						array_push($temp, '','','','1','','');
						break;
						case 'ngoaingu':
						array_push($temp, '','','','','1','');
						break;
						default:
						array_push($temp, '','','','','','1');
						break;
					}
					array_push($temp, $value['quoctich'], $value['hochieu'], $value['giaypheplaodong'], $value['noio'], $value['thamnien'], $value['ghichu']);
					array_push($data_insert, $temp);
				}
				$sheet->fromArray($data_insert, null, 'A9', null, null);
			});

			$excel->sheet('m1c',function($sheet) {
				$selected_field = $this->selected_field_c();
				$data = ExcelM1cModel::where('id','>',0)->get($selected_field);
				$data_header = ExcelM1cModel::where('id','>',0)->get(['tentrungtam','baocaoso','bc','ngay','thang','nam'])->first();

				if (isset($data_header))
					$data_header = $data_header->toArray();
				else 
					return 'Data is not found';
				if (isset($data))
					$data = $data->toArray();
				else 
					return 'Data is not found';

				$sheet->setOrientation('landscape');
				$sheet->setFontFamily('Times New Roman');
				$sheet->setFontSize(12);
				$sheet->setAutoSize(false);
				$range = count($data)+7;
				$sheet->setBorder('A6:T'.$range);
				/*
				Create table
				*/
				$sheet->appendRow(1, array(
					'ĐƠN VỊ CHỦ QUẢN',
					));
				$sheet->appendRow(2, array(
					'TRUNG TÂM: '.strtoupper($data_header['tentrungtam']),
					));
				$sheet->appendRow(3, ['BÁO CÁO DANH SÁCH, THÔNG TIN VÀ HỒ SƠ ĐỐI VỚI LAO ĐỘNG NƯỚC NGOÀI CỦA TRUNG TÂM HIỆN ĐANG GIẢNG DẠY TẠI CÁC TRƯỜNG HỌC CỦA HÀ NỘI ']);
				$sheet->appendRow(4, ['(Kèm theo báo cáo số  '.$data_header['baocaoso'].' /BC  '.$data_header['ngay'].' thang  '.$data_header['thang'].' năm  '.$data_header['nam'].'  )']);
				$sheet->appendRow(6, [
					'TT',
					'Họ và tên',
					'Quốc tịch',
					'Năm sinh','',
					'Trình độ, bằng cấp','',
					'Thông tin hộ chiếu, visa','','','',
					'Thông tin Giấy phép lao động','','','',
					'Hợp đồng lao động','','','',
					'Ghi chú',
					]);
				$sheet->appendRow(7,[
					'','','',
					'Nam',
					'Nữ',
					'Chuyên môn',
					'Ngoại ngữ',
					'Số HC',
					'Ngày hết hạn HC',
					'Số thẻ tạm chú/visa',
					'Thời hạn tạm chú/visa',
					'Số',
					'Thời hạn',
					'Địa chỉ nơi làm việc',
					'Địa chỉ cư chú',
					'Thời hạn',
					'Trực tiếp',
					'Thông qua đơn vị cung cấp khóa học (Ghi rõ Tên đơn vị)',
					'Số giờ phân công giảng dạy',
					]);
				/*
				Merge Rows and Colums
				*/
				$sheet->setMergeColumn(array(
					'columns'	=>	['A','B','C','T'],
					'rows'		=>	[[6,7]],
					));
				$sheet->mergeCells('A4:S4');
				$sheet->mergeCells('D6:E6');
				$sheet->mergeCells('F6:G6');
				$sheet->mergeCells('H6:K6');
				$sheet->mergeCells('L6:O6');
				$sheet->mergeCells('P6:S6');
				/*
				Style Rows and Colums
				*/
				$sheet->getStyle('A6:Z'.$range)->getAlignment()->setWrapText(true);
				$sheet->cell('A4:Z'.$range, function($cell) {
					$cell->setAlignment('center');
					$cell->setValignment('center');
				});
				$sheet->cell('A1:Z7', function($cell) {
					$cell->setFont([
						'bold'	=> true,
						]);
				});
				$sheet->cell('A4', function($cell) {
					$cell->setFont([
						'bold'		=>	false,
						'italic'		=>	true,
						]);
				});
				/*
				Insert Data 
				*/
				$insert_data = [];
				foreach ($data as $key => $value) {
					$temp = [];
					array_push($temp, $key+1, $value['hoten'], $value['quoctich']);
					($value['gioitinh']=='nam')?array_push($temp, '1',''):array_push($temp, '','1');
					($value['trinhdo']=='chuyenmon')?array_push($temp, '1',''):array_push($temp, '','1');
					array_push($temp, 
						$value['sohochieu'], 
						$value['hansudung_hochieu'], 
						$value['sovisa'], 
						$value['hansudung_visa'], 
						$value['so_giayphep'], 
						$value['thoihan_giayphep'], 
						$value['diachi_giayphep'], 
						$value['diachi_cutru'], 
						$value['thoihan_laodong'], 
						$value['tructiep'], 
						$value['tendonvi'], 
						$value['sogiogiangday'], 
						$value['ghichu']
						);
					array_push($insert_data, $temp);
				}
				$sheet->fromArray($insert_data, null, 'A8',false,false);
			});
		$excel->sheet('m1d',function($sheet) {
			$selected_field = $this->selected_field_d();
			$data = ExcelM1dModel::where('id','>',0)->get($selected_field);
		// $data_header = ::where('id','>',0)->get(['tentrungtam','baocaoso','bc','ngay','thang','nam']);
			$sheet->setOrientation('landscape');
			$sheet->setAutoSize(false);
			$sheet->setFontFamily('Times New Roman');
			$range = count($data)+2;
			$sheet->setBorder('A1:J'.$range,'thin');
				/*
				//Append Row
				*/
				$sheet->appendRow(1,[
					'TT',
					'Thông tin về trường tiếp nhận','','','','','','',
					'Tên GVNN được phân công',
					'Ghi chú',
					]);
				$sheet->appendRow(2,[
					'',
					'Tên trường',
					'Quận/Huyện',
					'Số lớp',
					'Tổng số hs',
					'Số tiết học/tháng',
					'Tỷ lệ % GVNN',
					'Cơ cấu GVNN',
					'Tên GVNN được phân công',
					]);	
				/*
				//Merge row and column
				*/
				$sheet->setMergeColumn([
					'columns'	=>	['A','I','J'],
					'rows'		=>	[
						[1,2],
						]
					]);
				$sheet->mergeCells('B1:H1');
				/*
				//Style row and column
				*/
				$sheet->getStyle('A1:Z'.$range)->getAlignment()->setWrapText(true);
				$sheet->cells('A1:Z'.$range, function($cell) {
					$cell->setAlignment('center');
					$cell->setValignment('center');
				});
				$sheet->cells('A1:J2', function($cell) {
					$cell->setFont([
						'bold'	=>	true,
						]);
				});
				/*
				//Insert data
				*/
				$insert_data = [];
				foreach ($data as $key => $value) {
					$temp = [];
					array_push($temp, $key+1);
					foreach ($selected_field as $val) {
						array_push($temp, $value->$val);
					}
					array_push($insert_data, $temp);
				}
				$sheet->fromArray($insert_data,null,'A3',false,false);
		});	
		})->store('xls', public_path('excel/exports'));
	}
}
