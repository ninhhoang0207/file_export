<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExcelModel;
use App\WordModel;
use Carbon\Carbon;
use Excel;
use Lang;
use Redirect;
use App\Http\Controllers\ExportFileController;

class ExcelExportFileController extends Controller
{

   private $gioitinh = array(
      'nam'             => 'Nam',
      'nu'              => 'Nữ',
      'khac'            => 'Khác',
      );
   private $chucvu = array(
      'quanly'          => 'Quản lý',
      'gv_huuco'        => 'Giáo viên Hữu cơ',
      'gv_thinhgiang'   => 'Giáo viên thỉnh giảng',
      'tinhnguyen'      => 'Tình nguyện viên',
      );
   private $trinhdo = array(
      'chuyennganh'     => 'Chuyên ngành',
      'trendaihoc'      => 'Trên đại học',
      'daihoc'          => 'Đại học',
      'caodang'         => 'Cao đẳng',
      'ngoaingu'        => 'Ngoại ngữ',
      'nghiepvu'        => 'Nghiệp vụ sư phạm',
      );
   private $bangcap = array(
      'chuyenmon'       => 'Chuyên môn',
      'ngoaingu'        => 'Ngoại ngữ',
      );

    //
	public function index() {
		return view('fontend.exports.index2');
	}

	public function create(Request $request, $company_id=-1) {
		$data = $request->all();
		$data['company_id'] = $company_id;
		unset($data['_token']);
		$data['hochieu_hansudung'] = isset($data['hochieu_hansudung'])?$this->parseDate($data['hochieu_hansudung']):null;
		$data['visa_hansudung'] = isset($data['visa_hansudung'])?$this->parseDate($data['hochieu_hansudung']):null;
		$data['giayphep_thoihan'] = $this->parseDate($data['giayphep_thoihan']);
		$create = ExcelModel::create($data);
		return Redirect::back();
	}

    public function listView($company_id = -1) {
      $data = ExcelModel::where('company_id',$company_id)->get(['id','hoten','gioitinh','chucvu','trinhdo','quoctich']);
      $company = WordModel::where('id',$company_id)->get(['trungtam','so','bc','ngay','thang','nam'])->first();
      return view('fontend.exports.list_excel')->with([
         'data'            => $data,
         'gioitinh'        => $this->gioitinh,
         'chucvu'          => $this->chucvu,
         'trinhdo'         => $this->trinhdo,
         'quoctich'        => Lang::get('countries'),
         'company_id'      => $company_id,
         'company'         => $company,
         ]);
   }

   public function preview(Request $request, $id = -1) {
      $data = ExcelModel::where('id',$id)->get($this->selected_field())->first();
      $data_header = WordModel::where('id',$data['company_id'])->get(['trungtam','so','bc','ngay','thang','nam'])->first();
      if (!count($data)) {
        $string = "Không có dữ liệu dữ liệu<br>";
        $string .= "<a href='http://localhost:8000'>Quay lại</a>";
        return $string;
      }
      return view('fontend.exports.preview_excel',compact(['data','data_header']));
   }

   public function edit($id = -1) {
      $data = ExcelModel::where('id',$id)->get($this->selected_field())->first();
      $data_header = WordModel::where('id',$data['company_id'])->get(['id','trungtam','so','bc','ngay','thang','nam'])->first();
      if (!count($data)) {
        $string = "Không có dữ liệu dữ liệu<br>";
        $string .= "<a href='http://localhost:8000'>Quay lại</a>";
        return $string;
      }
      return view('fontend.exports.edit_excel',compact(['data','data_header']));
   }

   public function update(Request $request, $id = -1) {
      $data = $request->except('_token');
      $update = ExcelModel::where('id',$id)->update($data);
      return Redirect::route('excel.list',['company_id'=>$request->company_id]);
   }

   public function delete($id = -1) {
      $delete = ExcelModel::where('id',$id)->delete();
      return Redirect::back();
   }

   public function export(Request $request,$company_id = -1) {
      $selected_field = $this->selected_field();
      unset($selected_field[0]);
      unset($selected_field[1]);
      $data = ExcelModel::where('company_id',$company_id)->get($selected_field);
      $data_header = WordModel::where('id',$company_id)->get(['id','trungtam','so','bc','ngay','thang','nam'])->first();
      if (!count($data)){
         $string = "Không có dữ liệu dữ liệu<br>";
         $string .= "<a href='http://localhost:8000'>Quay lại</a>";
         return $string;
      }
      if (!count($data_header)) {
         $string = "Không tìm thấy dữ liệu<br>";
         $string .= "<a href='http://localhost:8000'>Quay lại</a>";
         return $string;
      }
      $data = $data->toArray();
      $data_header = $data_header->toArray();
      $this->doExport($data,$data_header);
   }


   public function parseDate($date) {
      $date = str_replace("/", "-", $date);
      $date = Carbon::parse($date)->format('Y/m/d');
      return $date;
   }

   public function doExport($data, $data_header) {
      $temp = new ExportFileController;
      $file_name = str_replace(' ', '_', $temp->convert_vi_to_en($data_header['trungtam']));
      $file_name .= '_'.$data_header['so'].'_'.$data_header['bc'];
      $file_name .= time().'_'.$data_header['id'];
      Excel::create($file_name, function($excel) use($data, $data_header) {
         $excel->sheet('Thông tin về nhân viên', function($sheet) use($data, $data_header) {
            $sheet->setOrientation('landscape');
            $sheet->setFontFamily('Times New Roman');
            $sheet->setFontSize(12);
            $sheet->setAutoSize(false);
            $range = count($data)+6;
            $sheet->setBorder('A5:AA'.$range);
            //Insert text
            $sheet->appendRow(1, array(
               'ĐƠN VỊ CHỦ QUẢN',
               ));
            $sheet->appendRow(2, array(
               'TRUNG TÂM: '.strtoupper($data_header['trungtam']),
               ));
            $sheet->appendRow(3, array(
               'BÁO CÁO THỐNG KÊ SỐ LIỆU ĐỐI VỚI CÁC TRUNG TÂM'
               ));
            $sheet->appendRow(4, array(
               '(Kèm theo Báo cáo số: '.$data_header['so'].' /BC '.$data_header['bc'].', ngày '.$data_header['ngay'].' tháng  '.$data_header['thang'].' năm  '.$data_header['nam'].' )'
               ));
            $sheet->appendRow(5, array(
               'Họ và tên',
               'Giới tính',
               'Chức vụ, nhiệm vụ',
               'Trình độ',
               'Quốc tịch',
               'Số hộ chiếu',
               'Ngày hết hạn',
               'số thẻ tạm trú/Visa',
               'Thời hạn tạm trú/Visa',
               'Thâm niên công tác',
               'Trình độ bằng cấp',
               'Thông tin giấy phép lao động',
               '','','',
               'Hợp đồng lao động',
               '','','',
               'Thông tin về trường tiếp nhận',
               '','','','','','',
               'Ghi chú',
               ));
            $sheet->appendRow(6, array(
               '','','','',
               '','','','',
               '','','',
               'Số',
               'Ngày hết hạn',
               'Địa chỉ nơi làm việc',
               'Địa chỉ cư trú',
               'Thời hạn lao động',
               'Trực tiếp',
               'Thông qua đơn vị cung cấp khóa học',
               'Số giờ phân công giảng dạy',
               'Tên trường',
               'Quận/Huyện',
               'Số lớp',
               'Tổng số học sinh',
               'Số tiết học/tháng',
               'Tỷ lệ % GVNN',
               'Cơ cấu GVNN',
               ));
            

             /*
            //Set style row and column
            */
            $sheet->mergeCells('A3:Z3');
            $sheet->mergeCells('A4:Z4');
            $sheet->mergeCells('L5:O5');
            $sheet->mergeCells('P5:S5');
            $sheet->mergeCells('T5:Z5');

            $sheet->cell('A1:A2', function($cell) {
               $cell->setFont(array(
                  'bold'       =>  true
                  ));
            });
            $sheet->cell('A3:AA'.$range, function($cell) {
               $cell->setAlignment('center');
               $cell->setValignment('center');
               $cell->setFont([
                  'size'   => 12,
                  'bold'   => false,
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

            $sheet->setMergeColumn(array(
               'columns' => array('A','B','C','D','E','F','G','H','I','K','J','AA'),
               'rows' => array(
                  array(5,6),
                  )
               ));
            //Set wrap text
            $sheet->getStyle('A5:Z'.$range)->getAlignment()->setWrapText(true);
            //Insert data
            $gioitinh = $this->gioitinh;
            $chucvu = $this->chucvu;
            $trinhdo = $this->trinhdo;
            $bangcap = $this->bangcap;
            $countries = Lang::get('countries');
            foreach ($data as $key => $value) {
               $data[$key]['gioitinh'] = $gioitinh[$value['gioitinh']];
               $data[$key]['chucvu'] = $chucvu[$value['chucvu']];
               $data[$key]['trinhdo'] = $trinhdo[$value['trinhdo']];
               $data[$key]['bangcap'] = $bangcap[$value['bangcap']];
               $data[$key]['quoctich'] = $countries[$data[$key]['quoctich']]['name'];
            }
            $sheet->fromArray($data, null, 'A7',false,false);
         });
      // })->store('xls', public_path('excel/exports'));
      })->download('xls');
   }

   public function selected_field() {
    return array(
     'id',
     'company_id',
     'hoten',
     'gioitinh',
     'chucvu',
     'trinhdo',
     'quoctich',
     'hochieu_so',
     'hochieu_hansudung',
     'visa_so',
     'visa_hansudung',
     'thamnien',
     'bangcap',
     'giayphep_so',
     'giayphep_thoihan',
     'giayphep_lamviec',
     'giayphep_cutru',
     'hopdong_thoihan',
     'hopdong_tructiep',
     'hopdong_tendonvi',
     'hopdong_sogiogiangday',
     'tentruong',
     'quanhuyen',
     'solop',
     'sohocsinh',
     'sotiethoc',
     'tyle_gvnn',
     'cocau_gvnn',
     'ghichu',
     );
 }
}
