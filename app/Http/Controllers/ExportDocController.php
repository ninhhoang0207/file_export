<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExportDocController extends Controller
{
    //
    public function index( Request $request ) {
    	return view('fontend.doc.index');
    }

    public function post(Request $request) {
    	$data = $request->all();
    	unset($data['_token']);

    	$phpWord = new \PhpOffice\PhpWord\PhpWord();
    	/* Note: any element you append to a document must reside inside of a Section. */

		// Adding an empty Section to the document...
    	$section = $phpWord->addSection();
    	$section_style = $section->getStyle();
    	$position =
    	$section_style->getPageSizeW()
    	- $section_style->getMarginRight()
    	- $section_style->getMarginLeft();
    	$phpWord->addParagraphStyle(
    		'rightTab',
    		array('tabs' => array(new \PhpOffice\PhpWord\Style\Tab('right', 9090)))
    		);
    	$phpWord->addParagraphStyle(
    		'leftTab',
    		array('tabs' => array(new \PhpOffice\PhpWord\Style\Tab('left', 9090)))
    		);
    	$phpWord->addParagraphStyle("leftRight", array("tabs" => array(
    		new \PhpOffice\PhpWord\Style\Tab("right", $position)
    		)));
    	$style_1 = array(
    		'name'	=>	'Times New Roman',
    		'size'	=>	13,
    		);
    	$style_2 = array(
    		'name'	=>	'Times New Roman',
    		'size'	=>	13,
    		'bold'	=>	true,
    		);
    	$style_3 = array(
    		'name'	=>	'Times New Roman',
    		'size'	=>	12,
    		);
    	$style_4 = array(
    		'name'	=>	'Times New Roman',
    		'size'	=>	12,
    		'bold'	=>	true,
    		);
    	$style_5 = array(
    		'name' => 'Times New Roman',
    		'size' => 12,
    		'italic' => true
    		);
    	$style_6 = array(
    		'name' 	=> 'Times New Roman',
    		'size' 	=> 13,
    		'italic' => true,
    		'bold'	=>	true,
    		);
    	$style_7 = array(
    		'name' 	=> 'Times New Roman',
    		'size' 	=> 13,
    		'italic' => true,
    		);

		// Adding Text element to the Section having font styled by default...
		$table = $section->addTable();
		$table->addRow(1);
		$column_left = $table->addCell(6000);
		$column_right = $table->addCell(6000);
		$column_left->addText('ĐƠN VỊ CHỦ QUẢN', $style_1);
		$text = 'TRUNG TÂM: '.$data['0_0_trungtam'];
		$column_left->addText($text, $style_4);
		$text = 'Số '.$data['0_0_so'].' /BC '.$data['0_0_bc'];
		$column_left->addText($text, $style_3);
		$column_left->addText('VV  báo cáo tình hình hoạt động', $style_4);
		$column_left->addText('Trung tâm 6 tháng đầu năm 2017', $style_4);

		$column_right->addText('Cộng hòa Xã hội Chủ nghĩa Việt Nam', $style_3, ['align' => 'center']);
		$column_right->addText('Độc lập - Tự Do - Hạnh Phúc', $style_2, ['align' => 'center']);
		$column_right->addText('----------------', $style_3, ['align' => 'center']);
		$text = 'Hà Nội, Ngày '.$data['0_0_ngay'];
		$column_right->addText($text, $style_5, ['align' => 'center']);
		$section->addText();
		$section->addText();
		$section->addText('Kính gửi: Sở Giáo dục và Đào tạo Hà Nội', $style_2, ['align' => 'center']);
		$text = 'Thực hiện Công văn số '.$data['0_1_congvanso'].'/SGD&ĐT-GDTX-CN ngày '.$data['0_1_ngay'].' tháng '.$data['0_1_thang'].' năm '.$data['0_1_nam'].' của Sở Giáo dục và Đào tạo Hà Nội về việc báo cáo định kỳ kết quả hoạt động 6 tháng đầu năm 2017 đối với các Trung tâm: giáo dục/đào tạo có vốn ĐTNN;VPĐDGDNN; NN, NN-TH; nghiệp vụ chuyên ngành và các Tổ chức tư vấn du học trên địa bàn Thành phố, Trung tâm '.$data['0_1_trungtam'].' báo cáo tình hình và kết quả hoạt động 6 tháng đầu năm 2017 như sau:';
		// $section->addText(htmlspecialchars($text), $style_1, ['spaceBefore' => \PhpOffice\PhpWord\Shared\Converter::pointToTwip(7)]);
		$section->addText(htmlspecialchars($text), $style_1, ['spaceBefore ' => 300]);
		$text = '1- Tính pháp lý của cơ sở';
		$section->addText($text, $style_2);
		$text = '1.1. Thông tin doanh nghiệp';
		$section->addText($text, $style_2);
		$text = 'Giấy chứng nhận đầu tư/đăng ký doanh nghiệp';
		$section->addText($text, $style_6);
		$textrun = $section->createTextRun();
		$text = 'Số: '.$data['1_1_so'].', Ngày cấp: '.$data['1_1_ngaycap'].', nơi cấp: '.$data['1_1_noicap'];
		$section->addText($text, $style_1);
		$textrun = $section->createTextRun();
		$text = 'Địa chỉ trụ sở chính: ';
		$textrun->addText($text, $style_6, ['keepLines'=>true]);
		$text = $data['1_1_trusochinh'];
		$textrun->addText($text, $style_1);
		$text = 'Điện thoại: '.$data['1_1_dienthoai'].', Fax: '.$data['1_1_fax'].', Email: '.$data['1_1_email1'];
		$section->addText($text, $style_1);
		$text = 'Website: '.$data['1_1_website'];
		$section->addText($text, $style_1);
		$text = 'Loại hình doanh nghiệp: '.$data['1_1_loaihinhdn'];
		$section->addText($text, $style_1);
		$text = 'Thời hạn hoạt động: '.$data['1_1_thoihan'];
		$section->addText($text, $style_1);
		$text = 'Mã số thuế: '.$data['1_1_masothue'];
		$section->addText($text, $style_1);
		$text = 'Vốn đăng ký/điều lệ: '.$data['1_1_von_dieule'];
		$section->addText($text, $style_1);
		$text = 'Vốn góp thực hiện dự án đăng ký/cho Trung tâm: '.$data['1_1_von_trungtam'];
		$section->addText($text, $style_1);
		$text = 'Người đại diện pháp luật:';
		$section->addText($text, $style_6);
		$text = 'Họ và tên: '.$data['1_1_hoten'].', Quốc tịch: '.$data['1_1_quoctich'];
		$section->addText($text, $style_1);
		$text = 'Điện thoại di đông: '.$data['1_1_dtdd'].', Email liên hệ: '.$data['1_1_email2'];
		$section->addText($text, $style_1);
		$text = 'Nơi ở hiện tại: '.$data['1_1_noio'];
		$section->addText($text, $style_1);
		$text = '1.2. Thông tin Trung tâm: giáo dục/đào tạo có vốn ĐTNN; NN; NN-TH; nghiệp vụ chuyên ngành, sau đây gọi tắt là Trung tâm.';
		$section->addText($text, $style_2);
		$textrun = $section->createTextRun();
		$text = 'Tên trung tâm: ';
		$textrun->addText($text, $style_6);
		$text = '(tiếng Việt Nam): ';
		$textrun->addText($text, $style_7);
		$text = $data['1_2_tentrungtam_vn'];
		$textrun->addText($text, $style_1);
		$textrun = $section->createTextRun();
		$text = '(tiếng Anh, tên giao dịch): ';
		$textrun->addText($text, $style_7);
		$text = $data['1_2_tentrungtam_e'];
		$textrun->addText($text, $style_1);
		$text = 'Quyết định cho phép thành lập';
		$section->addText($text, $style_6);
		$text = 'Số: '.$data['1_2_thanhlap_so'].' Ngày cấp: '.$data['1_2_thanhlap_ngaycap'].' Nơi cấp: '.$data['1_2_thanhlap_noicap'];
		$section->addText($text, $style_1);
		$text = 'Quyết định/Chứng nhận cho phép hoạt động';
		$section->addText($text, $style_6);
		$text = 'Số: '.$data['1_2_hoatdong_so'].' Ngày cấp: '.$data['1_2_hoatdong_ngaycap'].' Nơi cấp: '.$data['1_2_hoatdong_noicap'];
		$section->addText($text, $style_1);
		$textrun = $section->createTextRun();
		$text = 'Giám đốc trung tâm:';
		$textrun->addText($text, $style_6);
		$text = '(Ghi rõ từng trung tâm)';
		$textrun->addText($text, $style_7);
		$text = 'Họ và tên: '.$data['1_2_gd_hoten'].', Quốc tịch: '.$data['1_2_gd_quoctich'];
		$section->addText($text, $style_1);
		$text = 'Điện thoại di động: '.$data['1_2_gd_dienthoai'].', Email liên hệ: '.$data['1_2_gd_email'];
		$section->addText($text, $style_1);
		$text = 'Nơi ở hiện tại: '.$data['1_2_gd_noio'];
		$section->addText($text, $style_1);
		$textrun = $section->createTextRun();
		$text = 'Địa chỉ cơ sở đào tạo: ';
		$textrun->addText($text, $style_6);
		$text = '(ghi rõ từng cơ sở) ';
		$textrun->addText($text, $style_7);
		$textrun = $section->createTextRun();
		$text = 'Nội dung hoạt động được cấp phép:';
		$textrun->addText($text, $style_6);
		$text = '(ghi theo Quyết định/Chứng nhận hoạt động)';
		$textrun->addText($text, $style_7);
		$text = '2. Báo cáo kết quả hoạt động 6 tháng đầu năm 2017';
		$section->addText($text, $style_2);
		$textrun = $section->createTextRun();
		$text = '2.1. Báo cáo thống kê số liệu đối với Trung tâm: ';
		$textrun->addText($text, $style_2);
		$text = 'báo cáo theo mẫu M1a';
		$textrun->addText($text, $style_7);
		$textrun = $section->createTextRun();
		$text = '2.2. Báo cáo danh sách, thông tin và hồ sơ đối với cán bộ, giám đốc làm việc tại Trung tâm: ';
		$textrun->addText($text, $style_2);
		$text = 'báo cáo theo mẫu M1b';
		$textrun->addText($text, $style_7);
		$textrun = $section->createTextRun();
		$text = '2.3. Báo cáo danh sách, thông tin và hồ sơ đối với lao động nước ngoài làm việc tại các trường đại học ở Hà Nội mà Trung tâm có hợp tác/liên kết: ';
		$textrun->addText($text, $style_2);
		$text = 'báo cáo theo mẫu M1c';
		$textrun->addText($text, $style_7);
		$text = '2.4. Đánh giá chung về kết quả hoạt động của Trung tâm 6 tháng đầu năm 2017';
		$section->addText($text, $style_2);
		$text = '2.5. Những khó khăn vướng mắc: ';
		$section->addText($text, $style_2);
		$text = $data['2_5_vuongmac'];
		$section->addText($text, $style_1);
		$text = '2.6. Đề xuất, kiến nghị với cơ quan chức năng: ';
		$section->addText($text, $style_2);
		$text = $data['2_6_kiennghi'];
		$section->addText($text, $style_1);
		$section->addText();
		$text = 'Giám đốc';
		$section->addText($text, $style_2,['align'=>'right','indentation' =>['left'=>0,'right' => 360]]);
		$text = '(Ký tên và đóng dấu)';
		$section->addText($text, $style_7,['align'=>'right']);

		// Saving the document as OOXML file...
		$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
		$objWriter->save('helloWorld.docx');

		// Saving the document as ODF file...
		// $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'ODText');
		// $objWriter->save('helloWorld.odt');

		// Saving the document as HTML file...
		// $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'HTML');
		// $objWriter->save('helloWorld.html');
   }

   public function test() {
   	$phpWord = new \PhpOffice\PhpWord\PhpWord();
   	/* Note: any element you append to a document must reside inside of a Section. */

		// Adding an empty Section to the document...
		$section = $phpWord->addSection();
		// Adding Text element to the Section having font styled by default...
   	$section->addText('"Learn from yesterday, live for today, hope for tomorrow. '
   		. 'The important thing is not to stop questioning." '
   		. '(Albert Einstein)');


		/*
		 * Note: it's possible to customize font style of the Text element you add in three ways:
		 * - inline;
		 * - using named font style (new font style object will be implicitly created);
		 * - using explicitly created font style object.
		 */

		// Adding Text element with font customized inline...
		$section->addText(
    	'"Great achievement is usually born of great sacrifice, '
        . 'and is never the result of selfishness." '
        . '(Napoleon Hill)',
    	array('name' => 'Tahoma', 'size' => 10)
		);

		// Adding Text element with font customized using named font style...
		$fontStyleName = 'oneUserDefinedStyle';
		$phpWord->addFontStyle(
    	$fontStyleName,
    	array('name' => 'Tahoma', 'size' => 10, 'color' => '1B2232', 'bold' => true)
		);
		$section->addText(
    	'"The greatest accomplishment is not in never falling, '
        . 'but in rising again after you fall." '
        . '(Vince Lombardi)',
    	$fontStyleName
		);

		// Adding Text element with font customized using explicitly created font style object...
		$fontStyle = new \PhpOffice\PhpWord\Style\Font();
		$fontStyle->setBold(true);
		$fontStyle->setName('Tahoma');
		$fontStyle->setSize(13);
		$myTextElement = $section->addText('"Believe you can and you\'re halfway there." (Theodor Roosevelt)');
		$myTextElement->setFontStyle($fontStyle);
		// Saving the document as OOXML file...
		$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
		$objWriter->save('helloWorld.docx');

		// Saving the document as ODF file...
		// $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'ODText');
		// $objWriter->save('helloWorld.odt');

		// Saving the document as HTML file...
		// $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'HTML');
		// $objWriter->save('helloWorld.html');
   }
}
