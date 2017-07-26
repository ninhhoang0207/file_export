<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WordModel;
use App\ExcelModel;
use Carbon\Carbon;
use Redirect;

class ExportFileController extends Controller
{
    //
	public function index() {
		return view('fontend.exports.index');
	}

	public function index2() {
		return view('fontend.exports.index2');
	}

	public function list_word () {
		$data = WordModel::find(1)->get(['trungtam','so','bc','id','ten_tep']);
		return view('fontend.exports.list_word',compact('data'));
	}

	public function word_preview($id = -1) {
		$data = WordModel::where('id',$id)->first();
		if (!isset($data)) {
			echo "Không tìm thấy dữ liệu";
		}
		$data = $data->toArray();
		$loaihinh = array();
		($data['loaihinh_ngoaingu']==1)?array_push($loaihinh, 'ngoaingu'):'';
		($data['loaihinh_tinhoc']==1)?array_push($loaihinh, 'tinhoc'):'';
		($data['loaihinh_ngoaingu_tinhoc']==1)?array_push($loaihinh, 'ngoaingu_tinhoc'):'';
		($data['loaihinh_nghiepvu_chuyennganh']==1)?array_push($loaihinh, 'nghiepvu_chuyennganh'):'';
		$data['loaihinh'] = $loaihinh;
		return view('fontend.exports.show_word',compact(['data','id']));
	}

	public function export_company_info(Request $request) {
		$data = $request->all();
		$phpWord = new \PhpOffice\PhpWord\PhpWord();

		// Adding Text element with font customized using named font style...
		$phpWord->setDefaultFontSize(13);
		$phpWord->setDefaultFontName('Times New Roman');


		// Adding an empty Section to the document...
		$section = $phpWord->addSection();
		$style = array(
			'bold'			=>	['bold'	=> true],
			'italic'			=>	['italic'=> true],
			'bold_italic' 	=> ['bold'	=>	true, 'italic'	=>	true],
			'12'				=>	['size'	=>	12],
			'bold_12'		=>	['size'	=>	12, 'bold'	=> true],
			'italic_12'		=>	['size'	=>	12, 'italic'=> true],	
			);

		$phpWord->addParagraphStyle(
			'rightTab',
			array('tabs' => array(new \PhpOffice\PhpWord\Style\Tab('right', 9090)))
			);
		$phpWord->addParagraphStyle(
			'leftTab',
			array('tabs' => array(new \PhpOffice\PhpWord\Style\Tab('left', 9090)))
			);

		// Adding Text element to the Section having font styled by default...
		$table = $section->addTable();
		$table->addRow(1);
		$column_left = $table->addCell(6000);
		$column_right = $table->addCell(6000);
		$column_left->addText('ĐƠN VỊ CHỦ QUẢN', $style['bold']);
		$text = 'TRUNG TÂM: '.$data['trungtam'];
		$column_left->addText($text, $style['bold_12']);
		$text = 'Số: '.$data['so'].' /BC: '.$data['bc'];
		$column_left->addText($text, $style['12']);
		$column_left->addText('VV  báo cáo tình hình hoạt động', $style['bold_12']);
		$column_left->addText('Trung tâm 6 tháng đầu năm 2017', $style['bold_12']);

		$column_right->addText('Cộng hòa Xã hội Chủ nghĩa Việt Nam', $style['12'], ['align' => 'center']);
		$column_right->addText('Độc lập - Tự Do - Hạnh Phúc', $style['bold'], ['align' => 'center']);
		$column_right->addText('----------------', $style['12'], ['align' => 'center']);
		$text = 'Hà Nội, Ngày '.$data['ngay'].' tháng '.$data['thang'].' năm '.$data['nam'];
		$column_right->addText($text, $style['italic_12'], ['align' => 'center']);
		$section->addText();
		$section->addText();
		$section->addText('Kính gửi: Sở Giáo dục và Đào tạo Hà Nội', $style['bold'], ['align' => 'center']);
		$textrun = $section->createTextRun();
		$text = '       Thực hiện Công văn số '.$data['congvan_so'].'/SGD&ĐT-GDTX-CN ngày '.$data['congvan_ngay'].' tháng '.$data['congvan_thang'].' năm '.$data['congvan_nam'].' của Sở Giáo dục và Đào tạo Hà Nội về việc báo cáo định kỳ kết quả hoạt động 6 tháng đầu năm 2017 đối với các Trung tâm: giáo dục/đào tạo có vốn ĐTNN;VPĐDGDNN; NN, NN-TH; nghiệp vụ chuyên ngành và các Tổ chức tư vấn du học trên địa bàn Thành phố, ';
		$textrun->addText(htmlspecialchars($text));
		$text = 'Trung tâm: '.$data['trungtam'];
		$textrun->addText($text, $style['bold']);
		$text = ' báo cáo tình hình và kết quả hoạt động 6 tháng đầu năm 2017 như sau:';
		$textrun->addText($text);
		// $section->addText(, null);
		$text = '1. Tính pháp lý của cơ sở';
		$section->addText($text, $style['bold']);
		$text = '1.1. Thông tin doanh nghiệp';
		$section->addText($text, $style['bold']);
		$text = 'Giấy chứng nhận đầu tư/đăng ký doanh nghiệp';
		$section->addText($text, $style['bold_italic']);
		$text = 'Số: '.$data['chungnhan_so'].', Ngày cấp: '.$data['chungnhan_ngaycap'].', nơi cấp: '.$data['chungnhan_noicap'];
		$section->addText($text);
		$textrun = $section->createTextRun();
		$text = 'Địa chỉ trụ sở chính: ';
		$textrun->addText($text, $style['bold_italic']);
		$text = $data['trusochinh_diachi'];
		$textrun->addText($text);
		$text = 'Điện thoại: '.$data['trusochinh_dienthoai'].', Fax: '.$data['trusochinh_fax'].', Email: '.$data['trusochinh_email'];
		$section->addText($text);
		$text = 'Website: '.$data['trusochinh_website'];
		$section->addText($text);
		$text = 'Loại hình doanh nghiệp: '.$data['loaihinhdoanhnghiep'];
		$section->addText($text);
		$text = 'Thời hạn hoạt động: '.$data['thoihan_hoatdong'];
		$section->addText($text);
		$text = 'Mã số thuế: '.$data['masothue'];
		$section->addText($text);
		$text = 'Vốn đăng ký/điều lệ: '.$data['von_dieule'].' VNĐ';
		$section->addText($text);
		$text = 'Vốn góp thực hiện dự án đăng ký/cho Trung tâm: '.$data['von_trungtam'].' VNĐ';
		$section->addText($text);
		$text = 'Người đại diện pháp luật:';
		$section->addText($text, $style['bold_italic']);
		$text = 'Họ và tên: '.$data['daidien_hoten'].', Quốc tịch: '.$data['daidien_quoctich'];
		$section->addText($text);
		$text = 'Điện thoại di động: '.$data['daidien_dtdd'].', Email liên hệ: '.$data['daidien_email'];
		$section->addText($text);
		$text = 'Nơi ở hiện tại: '.$data['daidien_noio'];
		$section->addText($text);
		$text = '1.2. Thông tin Trung tâm: giáo dục/đào tạo có vốn ĐTNN; NN; NN-TH; nghiệp vụ chuyên ngành, sau đây gọi tắt là Trung tâm.';
		$section->addText($text, $style['bold']);
		$textrun = $section->createTextRun();
		$text = 'Tên trung tâm: ';
		$textrun->addText($text, $style['bold_italic']);
		$text = '(tiếng Việt Nam): ';
		$textrun->addText($text, $style['italic']);
		$text = $data['tentrungtam_vn'];
		$textrun->addText($text);
		$textrun = $section->createTextRun();
		$text = '(tiếng Anh, tên giao dịch): ';
		$textrun->addText($text, $style['italic']);
		$text = $data['tentrungtam_e'];
		$textrun->addText($text);
		$text = 'Quyết định cho phép thành lập';
		$section->addText($text, $style['bold_italic']);
		$text = 'Số: '.$data['thanhlap_so'].' Ngày cấp: '.$data['thanhlap_ngaycap'].' Nơi cấp: '.$data['thanhlap_noicap'];
		$section->addText($text);
		if (isset($data['thanhlap_so2']) && isset($data['thanhlap_ngaycap2']) && isset($data['thanhlap_noicap2'])) {
			$text = 'Số: '.$data['thanhlap_so2'].' Ngày cấp: '.$data['thanhlap_ngaycap2'].' Nơi cấp: '.$data['thanhlap_noicap2'];
			$section->addText($text);
		}
		$text = 'Quyết định/Chứng nhận cho phép hoạt động';
		$section->addText($text, $style['bold_italic']);
		$text = 'Số: '.$data['hoatdong_so'].' Ngày cấp: '.$data['hoatdong_ngaycap'].' Nơi cấp: '.$data['hoatdong_noicap'];
		$section->addText($text);
		if (isset($data['hoatdong_so2']) && isset($data['hoatdong_ngaycap2']) && isset($data['hoatdong_noicap2'])) {
			$text = 'Số: '.$data['hoatdong_so2'].' Ngày cấp: '.$data['hoatdong_ngaycap2'].' Nơi cấp: '.$data['hoatdong_noicap2'];
			$section->addText($text);	
		}
		$textrun = $section->createTextRun();
		$text = 'Giám đốc trung tâm';
		$textrun->addText($text, $style['bold_italic']);
		$text = '(Ghi rõ từng trung tâm): ';
		$textrun->addText($text, $style['italic']);
		$text = 'Họ và tên: '.$data['giamdoc_hoten'].', Quốc tịch: '.$data['giamdoc_quoctich'];
		$section->addText($text);
		$text = 'Điện thoại di động: '.$data['giamdoc_dienthoai'].', Email liên hệ: '.$data['giamdoc_email'];
		$section->addText($text);
		$text = 'Nơi ở hiện tại: '.$data['giamdoc_noio'];
		$section->addText($text);
		$textrun = $section->createTextRun();
		$text = 'Địa chỉ cơ sở đào tạo';
		$textrun->addText($text, $style['bold_italic']);
		$text = '(ghi rõ từng cơ sở): ';
		$textrun->addText($text, $style['italic']);
		$text = $data['cosodaotao'];
		$textrun->addText($text);
		$textrun = $section->createTextRun();
		$text = 'Nội dung hoạt động được cấp phép:';
		$textrun->addText($text, $style['bold_italic']);
		$text = '(ghi theo Quyết định/Chứng nhận hoạt động)';
		$textrun->addText($text, $style['italic']);
		$text = $data['noidung_hoatdong'].'.';
		$section->addText($text);
		$text = '2. Báo cáo kết quả hoạt động 6 tháng đầu năm 2017';
		$section->addText($text, $style['bold']);
		$textrun = $section->createTextRun();
		$text = '2.1. Báo cáo thống kê số liệu đối với Trung tâm: ';
		$textrun->addText($text, $style['bold']);
		$text = 'báo cáo theo mẫu M1a';
		$textrun->addText($text, $style['italic']);
		$textrun = $section->createTextRun();
		$text = '2.2. Báo cáo danh sách, thông tin và hồ sơ đối với cán bộ, giám đốc làm việc tại Trung tâm: ';
		$textrun->addText($text, $style['bold']);
		$text = 'báo cáo theo mẫu M1b';
		$textrun->addText($text, $style['italic']);
		$textrun = $section->createTextRun();
		$text = '2.3. Báo cáo danh sách, thông tin và hồ sơ đối với lao động nước ngoài làm việc tại các trường đại học ở Hà Nội mà Trung tâm có hợp tác/liên kết: ';
		$textrun->addText($text, $style['bold']);
		$text = 'báo cáo theo mẫu M1c';
		$textrun->addText($text, $style['italic']);
		$text = '2.4. Đánh giá chung về kết quả hoạt động của Trung tâm 6 tháng đầu năm 2017';
		$section->addText($text, $style['bold']);
		$text = '2.5. Những khó khăn vướng mắc: ';
		$section->addText($text, $style['bold']);
		$text = $data['vuongmac'];
		$section->addText($text);
		$text = '2.6. Đề xuất, kiến nghị với cơ quan chức năng: ';
		$section->addText($text, $style['bold']);
		$text = $data['kiennghi'];
		$section->addText($text);
		$text = '3. Số liệu về cơ sở đào tạo';
		$section->addText($text, $style['bold']);
		$text = '3.1. Loại hình';
		$loaihinh = array(
			'ngoaingu'					=>	'Ngoại ngữ',
			'tinhoc'						=>	'Tin học',
			'ngoaingu_tinhoc'			=>	'Ngoại ngữ-Tin học',
			'nghiepvu_chuyennganh'	=>	'Nghiệp vụ chuyên ngành',
			);
		$section->addText($text, $style['bold']);
		foreach ($data['loaihinh'] as $key => $value) {
			$section->addListItem($loaihinh[$value].'.');
		}
		$text = '3.2. Học viên';
		$section->addText($text, $style['bold']);
		$textrun = $section->createTextRun();
		$text = 'Số lớp: ';
		$textrun->addText($text, $style['bold_italic']);
		$text = $data['solop'].' lớp.';
		$textrun->addText($text);
		$text = 'Số học viên: ';
		$section->addText($text, $style['bold_italic']);
		isset($data['hocvien_2014'])?$section->addListItem("Năm 2014: ".$data['hocvien_2014'].' học viên.'):'';
		isset($data['hocvien_2015'])?$section->addListItem("Năm 2015: ".$data['hocvien_2015'].' học viên.'):'';
		isset($data['hocvien_2016'])?$section->addListItem("Năm 2016: ".$data['hocvien_2016'].' học viên.'):'';
		isset($data['hocvien_2017'])?$section->addListItem("Năm 2017: ".$data['hocvien_2017'].' học viên.'):'';
		$textrun = $section->createTextRun();
		$text = 'Các mức học phí/khóa:';
		$textrun->addText($text, $style['bold_italic']);
		$text = '(Đơn vị 1000 VNĐ)';
		$textrun->addText($text, $style['italic']);
		(isset($data['hocphi_muc1']))?$section->addListItem("Mức 1: ".$data['hocphi_muc1'].' VNĐ.'):'';
		(isset($data['hocphi_muc2']))?$section->addListItem("Mức 2: ".$data['hocphi_muc2'].' VNĐ.'):'';
		(isset($data['hocphi_muc3']))?$section->addListItem("Mức 3: ".$data['hocphi_muc3'].' VNĐ.'):'';
		(isset($data['hocphi_muc4']))?$section->addListItem("Mức 4: ".$data['hocphi_muc4'].' VNĐ.'):'';
		$text = 'Thống kê cơ sở vật chất: ';
		$section->addText($text, $style['bold_italic']);
		isset($data['csvc_phonghoc'])?$section->addListItem("Phòng học: ".$data['csvc_phonghoc'].' phòng.'):'';
		isset($data['csvc_phongchucnang'])?$section->addListItem("Phòng chức năng: ".$data['csvc_phongchucnang'].' phòng.'):'';
		isset($data['csvc_thuvien'])?$section->addListItem("Thư viện: ".$data['csvc_thuvien'].' phòng.'):'';
		$section->addText();
		$text = 'Giám đốc';
		$section->addText($text, $style['bold'],['align'=>'right','indentation' =>['left'=>0,'right' => 400]]);
		$text = '(Ký tên và đóng dấu)';
		$section->addText($text, $style['italic'],['align'=>'right']);

		// Saving the document as Docx file...
		$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
		$file_name = str_replace(' ', '_', $this->convert_vi_to_en($data['trungtam'])).'_'.$data['so'].'_'.$data['bc'].time().'.docx';
		$objWriter->save(public_path('word/exports/'.$file_name));

		//Save data into database
		unset($data['_token']);
		$data['ten_tep'] = $file_name;
		$save_data = $data;
		foreach ($save_data['loaihinh'] as $key => $value) {
			$save_data['loaihinh_'.$value] = 1;			
		}
		unset($save_data['loaihinh']);
		$save_data['chungnhan_ngaycap'] = $this->parseDate($save_data['chungnhan_ngaycap']);
		$save_data['thanhlap_ngaycap'] = $this->parseDate($save_data['thanhlap_ngaycap']);
		$save_data['hoatdong_ngaycap'] = $this->parseDate($save_data['hoatdong_ngaycap']);
		isset($save_data['thanhlap_ngaycap'])?$save_data['thanhlap_ngaycap'] = $this->parseDate($save_data['thanhlap_ngaycap']):'';
		isset($save_data['hoatdong_ngaycap'])?$save_data['hoatdong_ngaycap'] = $this->parseDate($save_data['hoatdong_ngaycap']):'';
		$save = WordModel::create($save_data);
		$id = $save->id;
		return view('fontend.exports.show_word',compact(['data','id']));
	}

	public function parseDate($date) {
		$date = str_replace("/", "-", $date);
		$date = Carbon::parse($date)->format('Y/m/d');
		return $date;
	}

	public function edit($id=-1) {
		$data = WordModel::where('id',$id)->get($this->selected_filed())->first();
		if (count($data))
			$data->toArray();
		else 
			echo "Không tìm thấy dữ liệu";

		return view('fontend.exports.edit_word',compact('data'));
	}

	public function update(Request $request,$id) {
		$data = $request->except('_token');
		$save_data = $data;
		foreach ($save_data['loaihinh'] as $key => $value) {
			$save_data['loaihinh_'.$value] = 1;			
		}
		$old_file = WordModel::where('id',$id)->get(['ten_tep'])->first();
		$phpWord = new \PhpOffice\PhpWord\PhpWord();
		// Adding Text element with font customized using named font style...
		$phpWord->setDefaultFontSize(13);
		$phpWord->setDefaultFontName('Times New Roman');


		// Adding an empty Section to the document...
		$section = $phpWord->addSection();


		$style = array(
			'bold'			=>	['bold'	=> true],
			'italic'			=>	['italic'=> true],
			'bold_italic' 	=> ['bold'	=>	true, 'italic'	=>	true],
			'12'				=>	['size'	=>	12],
			'bold_12'		=>	['size'	=>	12, 'bold'	=> true],
			'italic_12'		=>	['size'	=>	12, 'italic'=> true],	
			);

		$phpWord->addParagraphStyle(
			'rightTab',
			array('tabs' => array(new \PhpOffice\PhpWord\Style\Tab('right', 9090)))
			);
		$phpWord->addParagraphStyle(
			'leftTab',
			array('tabs' => array(new \PhpOffice\PhpWord\Style\Tab('left', 9090)))
			);

		// Adding Text element to the Section having font styled by default...
		$table = $section->addTable();
		$table->addRow(1);
		$column_left = $table->addCell(6000);
		$column_right = $table->addCell(6000);
		$column_left->addText('ĐƠN VỊ CHỦ QUẢN', $style['bold']);
		$text = 'TRUNG TÂM: '.$data['trungtam'];
		$column_left->addText($text, $style['bold_12']);
		$text = 'Số: '.$data['so'].' /BC: '.$data['bc'];
		$column_left->addText($text, $style['12']);
		$column_left->addText('VV  báo cáo tình hình hoạt động', $style['bold_12']);
		$column_left->addText('Trung tâm 6 tháng đầu năm 2017', $style['bold_12']);

		$column_right->addText('Cộng hòa Xã hội Chủ nghĩa Việt Nam', $style['12'], ['align' => 'center']);
		$column_right->addText('Độc lập - Tự Do - Hạnh Phúc', $style['bold'], ['align' => 'center']);
		$column_right->addText('----------------', $style['12'], ['align' => 'center']);
		$text = 'Hà Nội, Ngày '.$data['ngay'].' tháng '.$data['thang'].' năm '.$data['nam'];
		$column_right->addText($text, $style['italic_12'], ['align' => 'center']);
		$section->addText();
		$section->addText();
		$section->addText('Kính gửi: Sở Giáo dục và Đào tạo Hà Nội', $style['bold'], ['align' => 'center']);
		$textrun = $section->createTextRun();
		$text = '       Thực hiện Công văn số '.$data['congvan_so'].'/SGD&ĐT-GDTX-CN ngày '.$data['congvan_ngay'].' tháng '.$data['congvan_thang'].' năm '.$data['congvan_nam'].' của Sở Giáo dục và Đào tạo Hà Nội về việc báo cáo định kỳ kết quả hoạt động 6 tháng đầu năm 2017 đối với các Trung tâm: giáo dục/đào tạo có vốn ĐTNN;VPĐDGDNN; NN, NN-TH; nghiệp vụ chuyên ngành và các Tổ chức tư vấn du học trên địa bàn Thành phố, ';
		$textrun->addText(htmlspecialchars($text));
		$text = 'Trung tâm: '.$data['trungtam'];
		$textrun->addText($text, $style['bold']);
		$text = ' báo cáo tình hình và kết quả hoạt động 6 tháng đầu năm 2017 như sau:';
		$textrun->addText($text);
		// $section->addText(, null);
		$text = '1. Tính pháp lý của cơ sở';
		$section->addText($text, $style['bold']);
		$text = '1.1. Thông tin doanh nghiệp';
		$section->addText($text, $style['bold']);
		$text = 'Giấy chứng nhận đầu tư/đăng ký doanh nghiệp';
		$section->addText($text, $style['bold_italic']);
		$text = 'Số: '.$data['chungnhan_so'].', Ngày cấp: '.$data['chungnhan_ngaycap'].', nơi cấp: '.$data['chungnhan_noicap'];
		$section->addText($text);
		$textrun = $section->createTextRun();
		$text = 'Địa chỉ trụ sở chính: ';
		$textrun->addText($text, $style['bold_italic']);
		$text = $data['trusochinh_diachi'];
		$textrun->addText($text);
		$text = 'Điện thoại: '.$data['trusochinh_dienthoai'].', Fax: '.$data['trusochinh_fax'].', Email: '.$data['trusochinh_email'];
		$section->addText($text);
		$text = 'Website: '.$data['trusochinh_website'];
		$section->addText($text);
		$text = 'Loại hình doanh nghiệp: '.$data['loaihinhdoanhnghiep'];
		$section->addText($text);
		$text = 'Thời hạn hoạt động: '.$data['thoihan_hoatdong'];
		$section->addText($text);
		$text = 'Mã số thuế: '.$data['masothue'];
		$section->addText($text);
		$text = 'Vốn đăng ký/điều lệ: '.$data['von_dieule'].' VNĐ';
		$section->addText($text);
		$text = 'Vốn góp thực hiện dự án đăng ký/cho Trung tâm: '.$data['von_trungtam'].' VNĐ';
		$section->addText($text);
		$text = 'Người đại diện pháp luật:';
		$section->addText($text, $style['bold_italic']);
		$text = 'Họ và tên: '.$data['daidien_hoten'].', Quốc tịch: '.$data['daidien_quoctich'];
		$section->addText($text);
		$text = 'Điện thoại di động: '.$data['daidien_dtdd'].', Email liên hệ: '.$data['daidien_email'];
		$section->addText($text);
		$text = 'Nơi ở hiện tại: '.$data['daidien_noio'];
		$section->addText($text);
		$text = '1.2. Thông tin Trung tâm: giáo dục/đào tạo có vốn ĐTNN; NN; NN-TH; nghiệp vụ chuyên ngành, sau đây gọi tắt là Trung tâm.';
		$section->addText($text, $style['bold']);
		$textrun = $section->createTextRun();
		$text = 'Tên trung tâm: ';
		$textrun->addText($text, $style['bold_italic']);
		$text = '(tiếng Việt Nam): ';
		$textrun->addText($text, $style['italic']);
		$text = $data['tentrungtam_vn'];
		$textrun->addText($text);
		$textrun = $section->createTextRun();
		$text = '(tiếng Anh, tên giao dịch): ';
		$textrun->addText($text, $style['italic']);
		$text = $data['tentrungtam_e'];
		$textrun->addText($text);
		$text = 'Quyết định cho phép thành lập';
		$section->addText($text, $style['bold_italic']);
		$text = 'Số: '.$data['thanhlap_so'].' Ngày cấp: '.$data['thanhlap_ngaycap'].' Nơi cấp: '.$data['thanhlap_noicap'];
		$section->addText($text);
		if (isset($data['thanhlap_so2']) && isset($data['thanhlap_ngaycap2']) && isset($data['thanhlap_noicap2'])) {
			$text = 'Số: '.$data['thanhlap_so2'].' Ngày cấp: '.$data['thanhlap_ngaycap2'].' Nơi cấp: '.$data['thanhlap_noicap2'];
			$section->addText($text);
		}
		$text = 'Quyết định/Chứng nhận cho phép hoạt động';
		$section->addText($text, $style['bold_italic']);
		$text = 'Số: '.$data['hoatdong_so'].' Ngày cấp: '.$data['hoatdong_ngaycap'].' Nơi cấp: '.$data['hoatdong_noicap'];
		$section->addText($text);
		if (isset($data['hoatdong_so2']) && isset($data['hoatdong_ngaycap2']) && isset($data['hoatdong_noicap2'])) {
			$text = 'Số: '.$data['hoatdong_so2'].' Ngày cấp: '.$data['hoatdong_ngaycap2'].' Nơi cấp: '.$data['hoatdong_noicap2'];
			$section->addText($text);	
		}
		$textrun = $section->createTextRun();
		$text = 'Giám đốc trung tâm';
		$textrun->addText($text, $style['bold_italic']);
		$text = '(Ghi rõ từng trung tâm): ';
		$textrun->addText($text, $style['italic']);
		$text = 'Họ và tên: '.$data['giamdoc_hoten'].', Quốc tịch: '.$data['giamdoc_quoctich'];
		$section->addText($text);
		$text = 'Điện thoại di động: '.$data['giamdoc_dienthoai'].', Email liên hệ: '.$data['giamdoc_email'];
		$section->addText($text);
		$text = 'Nơi ở hiện tại: '.$data['giamdoc_noio'];
		$section->addText($text);
		$textrun = $section->createTextRun();
		$text = 'Địa chỉ cơ sở đào tạo';
		$textrun->addText($text, $style['bold_italic']);
		$text = '(ghi rõ từng cơ sở): ';
		$textrun->addText($text, $style['italic']);
		$text = $data['cosodaotao'];
		$textrun->addText($text);
		$textrun = $section->createTextRun();
		$text = 'Nội dung hoạt động được cấp phép:';
		$textrun->addText($text, $style['bold_italic']);
		$text = '(ghi theo Quyết định/Chứng nhận hoạt động)';
		$textrun->addText($text, $style['italic']);
		$text = $data['noidung_hoatdong'].'.';
		$section->addText($text);
		$text = '2. Báo cáo kết quả hoạt động 6 tháng đầu năm 2017';
		$section->addText($text, $style['bold']);
		$textrun = $section->createTextRun();
		$text = '2.1. Báo cáo thống kê số liệu đối với Trung tâm: ';
		$textrun->addText($text, $style['bold']);
		$text = 'báo cáo theo mẫu M1a';
		$textrun->addText($text, $style['italic']);
		$textrun = $section->createTextRun();
		$text = '2.2. Báo cáo danh sách, thông tin và hồ sơ đối với cán bộ, giám đốc làm việc tại Trung tâm: ';
		$textrun->addText($text, $style['bold']);
		$text = 'báo cáo theo mẫu M1b';
		$textrun->addText($text, $style['italic']);
		$textrun = $section->createTextRun();
		$text = '2.3. Báo cáo danh sách, thông tin và hồ sơ đối với lao động nước ngoài làm việc tại các trường đại học ở Hà Nội mà Trung tâm có hợp tác/liên kết: ';
		$textrun->addText($text, $style['bold']);
		$text = 'báo cáo theo mẫu M1c';
		$textrun->addText($text, $style['italic']);
		$text = '2.4. Đánh giá chung về kết quả hoạt động của Trung tâm 6 tháng đầu năm 2017';
		$section->addText($text, $style['bold']);
		$text = '2.5. Những khó khăn vướng mắc: ';
		$section->addText($text, $style['bold']);
		$text = $data['vuongmac'];
		$section->addText($text);
		$text = '2.6. Đề xuất, kiến nghị với cơ quan chức năng: ';
		$section->addText($text, $style['bold']);
		$text = $data['kiennghi'];
		$section->addText($text);
		$text = '3. Số liệu về cơ sở đào tạo';
		$section->addText($text, $style['bold']);
		$text = '3.1. Loại hình';
		$loaihinh = array(
			'ngoaingu'					=>	'Ngoại ngữ',
			'tinhoc'						=>	'Tin học',
			'ngoaingu_tinhoc'			=>	'Ngoại ngữ-Tin học',
			'nghiepvu_chuyennganh'	=>	'Nghiệp vụ chuyên ngành',
			);
		$section->addText($text, $style['bold']);
		foreach ($data['loaihinh'] as $key => $value) {
			$section->addListItem($loaihinh[$value].'.');
		}
		$text = '3.2. Học viên';
		$section->addText($text, $style['bold']);
		$textrun = $section->createTextRun();
		$text = 'Số lớp: ';
		$textrun->addText($text, $style['bold_italic']);
		$text = $data['solop'].' lớp.';
		$textrun->addText($text);
		$text = 'Số học viên: ';
		$section->addText($text, $style['bold_italic']);
		isset($data['hocvien_2014'])?$section->addListItem("Năm 2014: ".$data['hocvien_2014'].' học viên.'):'';
		isset($data['hocvien_2015'])?$section->addListItem("Năm 2015: ".$data['hocvien_2015'].' học viên.'):'';
		isset($data['hocvien_2016'])?$section->addListItem("Năm 2016: ".$data['hocvien_2016'].' học viên.'):'';
		isset($data['hocvien_2017'])?$section->addListItem("Năm 2017: ".$data['hocvien_2017'].' học viên.'):'';
		$textrun = $section->createTextRun();
		$text = 'Các mức học phí/khóa:';
		$textrun->addText($text, $style['bold_italic']);
		$text = '(Đơn vị 1000 VNĐ)';
		$textrun->addText($text, $style['italic']);
		(isset($data['hocphi_muc1']))?$section->addListItem("Mức 1: ".$data['hocphi_muc1'].' VNĐ.'):'';
		(isset($data['hocphi_muc2']))?$section->addListItem("Mức 2: ".$data['hocphi_muc2'].' VNĐ.'):'';
		(isset($data['hocphi_muc3']))?$section->addListItem("Mức 3: ".$data['hocphi_muc3'].' VNĐ.'):'';
		(isset($data['hocphi_muc4']))?$section->addListItem("Mức 4: ".$data['hocphi_muc4'].' VNĐ.'):'';
		$text = 'Thống kê cơ sở vật chất: ';
		$section->addText($text, $style['bold_italic']);
		isset($data['csvc_phonghoc'])?$section->addListItem("Phòng học: ".$data['csvc_phonghoc'].' phòng.'):'';
		isset($data['csvc_phongchucnang'])?$section->addListItem("Phòng chức năng: ".$data['csvc_phongchucnang'].' phòng.'):'';
		isset($data['csvc_thuvien'])?$section->addListItem("Thư viện: ".$data['csvc_thuvien'].' phòng.'):'';
		$section->addText();
		$text = 'Giám đốc';
		$section->addText($text, $style['bold'],['align'=>'right','indentation' =>['left'=>0,'right' => 400]]);
		$text = '(Ký tên và đóng dấu)';
		$section->addText($text, $style['italic'],['align'=>'right']);

		// Saving the document as Docx file...
		$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
		$file_name = str_replace(' ', '_', $this->convert_vi_to_en($data['trungtam'])).'_'.$data['so'].'_'.$data['bc'].time().'_'.$id.'.docx';
		$objWriter->save(public_path('word/exports/'.$file_name));

		$data['ten_tep'] = $file_name;
		if (isset($old_file) && file_exists(public_path().'/word/exports/'.$old_file)) {
			$old_file = $old_file['ten_tep'];
			unlink(public_path().'/word/exports/'.$old_file);
		}
		$save_data = $data;
		(in_array('ngoaingu', $save_data['loaihinh']))?$save_data['loaihinh_ngoaingu']=1:$save_data['loaihinh_ngoaingu']=0;
		(in_array('tinhoc', $save_data['loaihinh']))?$save_data['loaihinh_tinhoc']=1:$save_data['loaihinh_tinhoc']=0;
		(in_array('ngoaingu_tinhoc', $save_data['loaihinh']))?$save_data['loaihinh_ngoaingu_tinhoc']=1:$save_data['loaihinh_ngoaingu_tinhoc']=0;
		(in_array('nghiepvu_chuyennganh', $save_data['loaihinh']))?$save_data['loaihinh_nghiepvu_chuyennganh']=1:$save_data['loaihinh_nghiepvu_chuyennganh']=0;
		unset($save_data['loaihinh']);
		$save_data['chungnhan_ngaycap'] = $this->parseDate($save_data['chungnhan_ngaycap']);
		$save_data['thanhlap_ngaycap'] = $this->parseDate($save_data['thanhlap_ngaycap']);
		$save_data['hoatdong_ngaycap'] = $this->parseDate($save_data['hoatdong_ngaycap']);
		isset($save_data['thanhlap_ngaycap'])?$save_data['thanhlap_ngaycap'] = $this->parseDate($save_data['thanhlap_ngaycap']):'';
		isset($save_data['hoatdong_ngaycap'])?$save_data['hoatdong_ngaycap'] = $this->parseDate($save_data['hoatdong_ngaycap']):'';
		WordModel::where('id',$id)->update($save_data);
		return view('fontend.exports.show_word',compact(['data','id']));
	}

	public function delete($id = -1) {
		$delete_excel = ExcelModel::where('company_id',$id)->delete();
		$delete = WordModel::where('id',$id)->delete();
		return Redirect::back();
	}

	public function selected_filed() {
		return [
           'trungtam',
           'so',
           'bc',
           'ngay',
           'thang',
           'nam',
           'congvan_so',
           'congvan_ngay',
           'congvan_thang',
           'congvan_nam',
           'chungnhan_so',
           'chungnhan_ngaycap',
           'chungnhan_noicap',
           'trusochinh_diachi',
           'trusochinh_dienthoai',
           'trusochinh_fax',
           'trusochinh_email',
           'trusochinh_website',
           'loaihinhdoanhnghiep',
           'thoihan_hoatdong',
           'masothue',
           'von_dieule',
           'von_trungtam',
           'daidien_hoten',
           'daidien_quoctich',
           'daidien_dtdd',
           'daidien_email',
           'daidien_noio',
           'tentrungtam_vn',
           'tentrungtam_e',
           'thanhlap_so',
           'thanhlap_ngaycap',
           'thanhlap_noicap',
           'hoatdong_so',
           'hoatdong_ngaycap',
           'hoatdong_noicap',
           'thanhlap_so2',
           'thanhlap_ngaycap2',
           'thanhlap_noicap2',
           'hoatdong_so2',
           'hoatdong_ngaycap2',
           'hoatdong_noicap2',
           'giamdoc_hoten',
           'giamdoc_quoctich',
           'giamdoc_dienthoai',
           'giamdoc_email',
           'giamdoc_noio',
           'cosodaotao',
           'noidung_hoatdong',
           'vuongmac',
           'kiennghi',
           'loaihinh_ngoaingu',
           'loaihinh_tinhoc',
           'loaihinh_ngoaingu_tinhoc',
           'loaihinh_nghiepvu_chuyennganh',
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
           'ten_tep',
		];
	}

	public function convert_vi_to_en($str) {
		$str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", "a", $str);
		$str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", "e", $str);
		$str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", "i", $str);
		$str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", "o", $str);
		$str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", "u", $str);
		$str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", "y", $str);
		$str = preg_replace("/(đ)/", "d", $str);
		$str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", "A", $str);
		$str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", "E", $str);
		$str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", "I", $str);
		$str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", "O", $str);
		$str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", "U", $str);
		$str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", "Y", $str);
		$str = preg_replace("/(Đ)/", "D", $str);
		return $str;
	}
}
