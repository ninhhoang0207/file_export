@extends('templates.master')
@section('title')
THÔNG TIN VỀ CƠ SỞ ĐÀO TẠO
@endsection
@section('content')
<style type="text/css">
	ul {
		list-style: none;
	}
	li {
		float: left;
	}

	td {
		padding-bottom: 1em;
	}
</style>
<form method="POST" id="form_m1">
	{{csrf_field()}}
	<div id="header" class="form-group">
		<h3 align="center"><b>THÔNG TIN CƠ SỞ ĐÀO TẠO</b></h3>
		<hr>
	</div>

	<div id="body" class="row">
		<div class="col-md-6" id="donvichuquan">
			<ul>
				<h4>Đơn vị chủ quản</h4>
				<li><label>Trung tâm:&nbsp</label></li>
				<li><input required type="text" name="trungtam" size="50" value="{{$data['trungtam']}}">&nbsp</li>
				<br><br>
				<li><label>Số:&nbsp</label></li>
				<li><input required type="" name="so" value="{{$data['so']}}">&nbsp/</li>
				<li><label>BC:&nbsp</label></li>
				<li><input required type="" name="bc" value="{{$data['bc']}}"></li>
				<br><br>
				<li><label>VV  báo cáo tình hình hoạt động Trung tâm 6 tháng đầu năm 2017</label></li>
			</ul>
		</div>
		<div class="col-md-6" id="modau">
			<p align="center">Cộng hòa Xã hội Chủ nghĩa Việt Nam</p>
			<p align="center"><b>Độc lập - Tự do - Hạnh phúc</b></p>
			<hr>
			<ul>
				<li><label>Hà nội,&nbsp</label>ngày&nbsp</li>
				<li><p><input required type="" name="ngay" value="{{$data['ngay']}}" style="width:100px">&nbsp</p></li>
				<li>/tháng&nbsp</li>
				<li><input required type="" name="thang" value="{{$data['thang']}}" style="width:100px">&nbsp</li>
				<li><p>/năm&nbsp</p></li>
				<li><input required type="" name="nam" value="{{$data['nam']}}" style="width:100px">&nbsp</li>
				<!-- <li><input required type="text" name="ngay" id="datetimepicker"></li> -->
			</ul>
		</div>
		<div class="col-md-12 form-group"></div>
		<div class="col-md-12 form-group"></div>
		<hr>
		<div id="noidung">
			<div class="col-md-12 form-group">
				<h4 align="center"><b>Kính gửi: Sở giáo dục và Đạo tạo Hà Nội</b></h4>
					<ul>
						<li><p>Thực hiện công văn số &nbsp</p></li>
						<li><input required type="text" name="congvan_so" value="{{$data['congvan_so']}}">&nbsp</li>
						<li><p>/SGD&ĐT-GDTX-CN ngày &nbsp</p></li>
						<li><p><input required type="" name="congvan_ngay" value="{{$data['congvan_ngay']}}" style="width:100px">&nbsp</p></li>
						<li>tháng&nbsp</li>
						<li><input required type="" name="congvan_thang" value="{{$data['congvan_thang']}}" style="width:100px">&nbsp</li>
						<li><p>năm&nbsp</p></li>
						<li><input required type="" name="congvan_nam" value="{{$data['congvan_nam']}}" style="width:100px">&nbsp</li>
						<li><p>của Sở Giáo dục và Đào tạo Hà Nội về việc báo cáo định kỳ kết quả hoạt động 6 tháng đầu năm 2017 đối với các Trung tâm: giáo dục/đào tạo có vốn ĐTNN;VPĐDGDNN; NN, NN-TH; nghiệp vụ chuyên ngành và các Tổ chức tư vấn du học trên địa bàn Thành phố,</p></li>
						<li><p><b><b>Trung tâm</b>&nbsp</b></p></li>
						<li><input required type="text"  value="{{$data['trungtam']}}" size="50" \>&nbsp</li>
						<li><p>báo cáo tình hình và kết quả hoạt động 6 tháng đầu năm 2017 như sau: </p></li>
					</ul>
			</div>
			<div  class="col-md-12 form-group">
				<ul>
					<h4><b>1- Tính pháp lý của cơ sở</b></h4>
					<h5><b>1.1. Thông tin doanh nghiệp</b></h5>
					<p><b><i>Giấy chứng nhận đầu tư/đăng ký doanh nghiệp:</i></b></p>
					<li><p>Số:&nbsp</p></li>
					<li><input required type="text" name="chungnhan_so" value="{{$data['chungnhan_so']}}">&nbsp</li>
					<li><p>Ngày cấp&nbsp</p></li>
					<li><input required type="text" name="chungnhan_ngaycap" id="chungnhan_ngaycap" value="{{$data['chungnhan_ngaycap']}}">&nbsp</li>
					<li>Nơi cấp&nbsp</li>
					<li><input required type="text" name="chungnhan_noicap" value="{{$data['chungnhan_noicap']}}" size="50px">&nbsp</li>
					<br><br>
					<li><p><b><i>Địa chỉ trụ sở chính:&nbsp</i></b></p></li>
					<li><input required type="text" name="trusochinh_diachi" value="{{$data['trusochinh_diachi']}}">&nbsp</li>
					<br><br>
					<li><p>ĐT:&nbsp</p></li>
					<li><input required type="" name="trusochinh_dienthoai" value="{{$data['trusochinh_dienthoai']}}">&nbsp</li>
					<li><p>Fax:&nbsp</p></li>
					<li><input required type="" name="trusochinh_fax" value="{{$data['trusochinh_fax']}}">&nbsp</li>
					<li><p>Email:&nbsp</p></li>
					<li><input required type="email" name="trusochinh_email" value="{{$data['trusochinh_email']}}" size="50px">&nbsp</li>
					<br><br>
					<li><p>Website:&nbsp</p></li>
					<li><input required type="text" name="trusochinh_website" value="{{$data['trusochinh_website']}}" size="100px">&nbsp</li>
					<br><br>
					<li><p>Loại hình doanh nghiệp:&nbsp</p></li>
					<li><input required type="text" name="loaihinhdoanhnghiep" value="{{$data['loaihinhdoanhnghiep']}}" size="100px">&nbsp</li>
					<br><br>
					<li><p>Thời hạn hoạt động:&nbsp</p></li>
					<li><input required type="text" name="thoihan_hoatdong" value="{{$data['thoihan_hoatdong']}}" id="thoihan_hoatdong">&nbsp</li>
					<br><br>
					<li><p>Mã số thuế:&nbsp</p></li>
					<li><input required type="text" name="masothue" value="{{$data['masothue']}}" size="50px">&nbsp</li>
					<li><p>Vốn đăng ký/điều lệ:&nbsp</p></li>
					<li><input required type="text" name="von_dieule" value="{{$data['von_dieule']}}" size="50px">&nbsp VNĐ</li>
					<br><br>
					<li><p>Vón góp thực hiện dự án đăng ký/cho Trung Tâm:&nbsp</p></li>
					<li><input required type="text" name="von_trungtam" value="{{$data['von_trungtam']}}" size="50px">&nbsp VNĐ</li>
					<br><br>
					<li><b><i>Người đại diện theo pháp luật</i></b></li>
					<br><br>
					<li><p>Họ và tên:&nbsp</p></li>
					<li><input required type="text" name="daidien_hoten" value="{{$data['daidien_hoten']}}">&nbsp</li>
					<li><p>Quốc tịch&nbsp</p></li>
					<li><input required type="text" name="daidien_quoctich" value="{{$data['daidien_quoctich']}}">&nbsp</li>
					<br><br>
					<li><p>Điện thoại di động:&nbsp</p></li>
					<li><input required type="" name="daidien_dtdd" value="{{$data['daidien_dtdd']}}">&nbsp</li>
					<li><p>Email liên hệ:&nbsp</p></li>
					<li><input required type="email" name="daidien_email" value="{{$data['daidien_email']}}" size="50px">&nbsp</li>
					<br><br>
					<li><p>Nơi ở hiện tại:&nbsp</p></li>
					<li><input required type="text" name="daidien_noio" value="{{$data['daidien_noio']}}" size="100px">&nbsp</li>
					<br><br>
					<h5><b>1.2. Thông tin Trung tâm: giáo dục/đào tạo có vốn ĐTNN; NN, NN-TH; nghiệp vụ chuyên ngành, sau đây gọi tắt là Trung tâm</b></h5>
					<li><i><b>Tên trung tâm</b>(Tiếng Việt Nam):&nbsp</i></li>
					<li><input required type="text" name="tentrungtam_vn" value="{{$data['tentrungtam_vn']}}">&nbsp</li>
					<br><br>
					<li><i>(Tiếng anh, tên giao dịch):&nbsp</i></li>
					<li><input required type="text" name="tentrungtam_e" value="{{$data['tentrungtam_e']}}">&nbsp</li>
					<br><br>
					<div id="m1_chophep_thanhlap">
						<li><i><b>Quyết định cho phép thành lập</b></i></li>
						<br><br>
						<li><p>Số:&nbsp</p></li>
						<li><input required type="text" name="thanhlap_so" value="{{$data['thanhlap_so']}}">&nbsp</li>
						<li><p>Ngày cấp:&nbsp</p></li>
						<li><input required type="text" name="thanhlap_ngaycap" value="{{$data['thanhlap_ngaycap']}}" id="thanhlap_ngaycap_datetimepicker">&nbsp</li>
						<li><p>Nơi cấp:&nbsp</p></li>
						<li><input required type="text" name="thanhlap_noicap" value="{{$data['thanhlap_noicap']}}" size="50px">&nbsp</li>
						@if (isset($data['thanhlap_so2']))
						<br><br>
						<li><p>Số:&nbsp</p></li>
						<li><input required type="text" name="thanhlap_so2" value="{{$data['thanhlap_so2']}}">&nbsp</li>
						<li><p>Ngày cấp:&nbsp</p></li>
						<li><input required type="text" name="thanhlap_ngaycap2" value="{{$data['thanhlap_ngaycap2']}}" id="thanhlap_ngaycap2_datetimepicker">&nbsp</li>
						<li><p>Nơi cấp:&nbsp</p></li>
						<li><input required type="text" name="thanhlap_noicap2" value="{{$data['thanhlap_noicap2']}}" size="50px">&nbsp</li>
						@else
						<li><button id="btn_addfield1" onclick="addfield1(); return false"><span class="glyphicon glyphicon-plus"></span></button></li>
						<div id="m1_chophep_thanhlap2"></div>
						@endif
					</div>
					<br><br>
					<li><i><b>Quyết định/Chứng nhận cho phép hoạt động</b></i></li>
					<br><br>
					<div id="m1_chophep_hoatdong">
						<li><p>Số:&nbsp</p></li>
						<li><input required type="text" name=hoatdong_so value="{{$data['hoatdong_so']}}">&nbsp</li>
						<li><p>Ngày cấp:&nbsp</p></li>
						<li><input required type="text" name="hoatdong_ngaycap" value="{{$data['hoatdong_ngaycap']}}" id="hoatdong_ngaycap_datetimepicker">&nbsp</li>
						<li><p>Nơi cấp:&nbsp</p></li>
						<li><input required type="text" name="hoatdong_noicap" value="{{$data['hoatdong_noicap']}}" size="50px">&nbsp</li>
						@if (isset($data['hoatdong_so2']))
						<br><br>
						<li><p>Số:&nbsp</p></li>
						<li><input required type="text" name="hoatdong_so2" value="{{$data['thanhlap_so2']}}">&nbsp</li>
						<li><p>Ngày cấp:&nbsp</p></li>
						<li><input required type="text" name="hoatdong_ngaycap2" value="{{$data['thanhlap_ngaycap2']}}" id="hoatdong_ngaycap2_datetimepicker">&nbsp</li>
						<li><p>Nơi cấp:&nbsp</p></li>
						<li><input required type="text" name="hoatdong_noicap2" value="{{$data['thanhlap_noicap2']}}" size="50px">&nbsp</li>
						@else
						<li><button id="btn_addfield2" onclick="addfield2(); return false"><span class="glyphicon glyphicon-plus"></span></button></li>
						<div id="m1_chophep_hoatdong2"></div>
						@endif
					</div>
					<br><br>
					<li><i><b>Giám đốc trung tâm:&nbsp</b>(Ghi rõ từng trung tâm)</i></li>
					<br><br>
					<li><p>Họ và tên:&nbsp</p></li>
					<li><input required type="text" name="giamdoc_hoten" value="{{$data['giamdoc_hoten']}}">&nbsp</li>
					<li><p>Quốc tịch:&nbsp</p></li>
					<li><input required type="text" name="giamdoc_quoctich" value="{{$data['giamdoc_quoctich']}}"></li>
					<br><br>
					<li><p>Điện thoại di động:&nbsp</p></li>
					<li><input required type="" name="giamdoc_dienthoai" value="{{$data['giamdoc_dienthoai']}}">&nbsp</li>
					<li><p>Email liên hệ:&nbsp</p></li>
					<li><input required type="email" name="giamdoc_email" value="{{$data['giamdoc_email']}}" size="50px">&nbsp</li>
					<br><br>
					<li><p>Nơi ở hiện tại:&nbsp</p></li>
					<input required type="text" name="giamdoc_noio" value="{{$data['giamdoc_noio']}}" size="50px">
					<br><br>
					<li><i><b>Địa chỉ cơ sở đào tạo:&nbsp</b>(Ghi rõ từng cơ sở)&nbsp</i></li>
					<li><input required type="text" name="cosodaotao" value="{{$data['cosodaotao']}}" size="50px"></li>
					<br><br>
					<li><i><b>Nội dung hoạt động được cấp phép:&nbsp</b>(ghi theo Quyết định/Chứng nhận hoạt động)</i>
					</li>
					<br><br>
					<textarea rows="5" cols="100" name="noidung_hoatdong">{{$data['noidung_hoatdong']}}</textarea>
					<br><br>
					<h5><b>2. Báo cáo kết quả hoạt động 6 tháng đầu năm 2017</b></h5>
					<h5><b>2.1. Báo cáo thống kê số liệu đối với Trung tâm:&nbsp</b><i>báo cáo theo mẫu M1a</i></h5>
					<h5><b>2.2. Báo cáo danh sách, thông tin và hồ sơ đối với cán bộ, giáo viên làm việc tại Trung tâm:&nbsp</b><i>báo cáo theo mẫu M1b</i></h5>
					<h5><b>2.3. Báo cáo danh sách, thông tin và hồ sơ đối với lao động người nước ngoài làm việc tại các trường học của Hà Nội mà Trung tâm có hợp tác/liên kết:&nbsp</b><i>báo cáo theo mẫu M1c</i></h5>
					<h5><b>2.4. Đánh giá chung về kết quả hoạt động của Trung tâm 6 tháng đầu năm 2017:</b></h5>
					<h5><b>2.5. Những khó khăn và vướng mắc:</b></h5>
					<textarea rows="5" cols="100" name="vuongmac">
						{{$data['vuongmac']}}
					</textarea>
					<h5><b>2.6. Đề xuất, kiến nghị với các cơ quan chức năng:</b></h5>
					<textarea rows="5" cols="100" name="kiennghi">
						{{$data['kiennghi']}}
					</textarea>
				</ul>
				<div>
						<ul>
							<h5><b>3. SỐ LIỆU VỀ CƠ SỞ ĐÀO TẠO</b></h5>
							<table>
								<col width="500px">
								<col width="100">
								<tr>
									<td><b>3.1. Loại hình:&nbsp</b></td>
								</tr>
								<tr>
									<td style="padding-left: 30px"><i>3.1.1. Ngoại ngữ</i></td>
									<td><input required type="checkbox" name="loaihinh[]" value="ngoaingu" {{$data['loaihinh_ngoaingu']==1?"checked":""}}></td>
								</tr>
								<tr>
									<td style="padding-left: 30px"><i>3.1.2. Tin học</i></td>
									<td><input required type="checkbox" name="loaihinh[]" value="tinhoc"
									{{$data['loaihinh_tinhoc']==1?"checked":""}}></td>
								</tr>
								<tr>
									<td style="padding-left: 30px"><i>3.1.3. Ngoại ngữ-Tin học</i></td>
									<td><input required type="checkbox" name="loaihinh[]" value="ngoaingu_tinhoc" {{$data['loaihinh_ngoaingu_tinhoc']==1?"checked":""}}></td>
								</tr>
								<tr>
									<td style="padding-left: 30px"><i>3.1.4. Nghiệp vụ chuyên ngành</i></td>
									<td><input required type="checkbox" name="loaihinh[]" value="nghiepvu_chuyennganh" {{$data['loaihinh_nghiepvu_chuyennganh']==1?"checked":""}}></td>
								</tr>
								<tr>
									<td><b>3.2.Học viên:&nbsp</b></td>
								</tr>
								<tr>
									<td style="padding-left: 30px"><i>3.2.1. Số lớp</i></td>
									<td><input required type="number" name="solop" value="{{$data['solop']}}"></td>
								</tr>
								<tr>
									<td style="padding-left: 30px"><i>3.2.2. Số học viên</i></td>
								</tr>
								<tr>
									<td style="padding-left: 60px">3.2.2.1. Năm 2014</td>
									<td><input required type="number" name="hocvien_2014" value="{{$data['hocvien_2014']}}"></td>
								</tr>
								<tr>
									<td style="padding-left: 60px">3.2.2.2 Năm 2015</td>
									<td><input required type="number" name="hocvien_2015" value="{{$data['hocvien_2015']}}"></td>
								</tr>
								<tr>
									<td style="padding-left: 60px">3.2.2.3 Năm 2016</td>
									<td><input required type="number" name="hocvien_2016" value="{{$data['hocvien_2016']}}"></td>
								</tr>
								<tr>
									<td style="padding-left: 60px">3.2.2.4 Năm 2017</td>
									<td><input required type="number" name="hocvien_2017" value="{{$data['hocvien_2017']}}"></td>
								</tr>
								<tr>
									<td><b>3.3. Các mức học phí/khóa:&nbsp</b><i>(Đơn vị 1000 VNĐ)</i></td>
								</tr>
								<tr>
									<td style="padding-left: 30px"><i>3.3.1 Mức 1</i></td>
									<td><input required type="number" name="hocphi_muc1" value="{{$data['hocphi_muc1']}}"></td>
								</tr>
								<tr>
									<td style="padding-left: 30px"><i>3.3.2 Mức 2</i></td>
									<td><input required type="number" name="hocphi_muc2" value="{{$data['hocphi_muc2']}}"></td>
								</tr>
								<tr>
									<td style="padding-left: 30px"><i>3.3.3 Mức 3</i></td>
									<td><input required type="number" name="hocphi_muc3" value="{{$data['hocphi_muc3']}}"></td>
								</tr>
								<tr>
									<td style="padding-left: 30px"><i>3.3.4 Mức 4</i></td>
									<td><input required type="number" name="hocphi_muc4" value="{{$data['hocphi_muc4']}}"></td>
								</tr>
								<tr>
									<td><b>3.4. Thống kê cơ sở vật chất:&nbsp</b></td>
								</tr>
								<tr>
									<td style="padding-left: 30px"><i>3.4.1. Tổng số phòng học</i></td>
									<td><input required type="number" name="csvc_phonghoc" value="{{$data['csvc_phonghoc']}}"></td>
								</tr>
								<tr>
									<td style="padding-left: 30px"><i>3.4.2. Tổng số phòng chức năng</i></td>
									<td><input required type="number" name="csvc_phongchucnang" value="{{$data['csvc_phongchucnang']}}"></td>
								</tr>
								<tr>
									<td style="padding-left: 30px"><i>3.4.3. Thư viện</i></td>
									<td><input required type="number" name="csvc_thuvien" value="{{$data['csvc_thuvien']}}"></td>
								</tr>
							</table>
						</ul>
					</div>
			</div>
		</div>
	</div>


	<div id="footer" class="row">
		<div class="col-md-4"></div>
		<div>
			<button type="submit" class="btn btn-success">Cập nhật <span class="glyphicon glyphicon-upload"></span></button>
			<a href="{{route('home')}}" class="btn btn-warning">Quay lại <span class="glyphicon glyphicon-arrow-left"></a>
		</div>
	</div>
</form>
@endsection
@push('scripts')
<script type="text/javascript">
	$('#form_m1').validate();
	$.validator.messages.required = 'Vui lòng nhập đầy đủ thông tin';

	$('#chungnhan_ngaycap').datetimepicker({
		format:'d/m/Y',
	});
	
	$('#m1a_chungnhanngay_landau').datetimepicker({
		format:'d/m/Y',
	});
	$('#m1a_chungnhanngay_hientai').datetimepicker({
		format:'d/m/Y',
	});
	$('#thanhlap_ngaycap_datetimepicker').datetimepicker({
		format:'d/m/Y',
	});
	$('#hoatdong_ngaycap_datetimepicker').datetimepicker({
		format:'d/m/Y',
	});
	$('#m1c_hansudung_hochieu').datetimepicker({
		format:'d/m/Y',
	});
	$('#m1c_hansudung_visa').datetimepicker({
		format:'d/m/Y',
	});
	$('#m1c_thoihan_giayphep').datetimepicker({
		format: 'd/m/Y',
	});
	$('#m1c_thoihan_laodong').datetimepicker({
		format: 'd/m/Y',
	});
	
	function addfield1() {
		var html =
		'<br><br>'+
		'<li><p>Số:&nbsp</p></li>'+
		'<li><input required type="text" name="thanhlap_so2">&nbsp</li>'+
		'<li><p>Ngày cấp:&nbsp</p></li>'+
		'<li><input required type="text" name="thanhlap_ngaycap2" id="thanhlap_ngaycap2">&nbsp</li>'+
		'<li><p>Nơi cấp:&nbsp</p></li>'+
		'<li><input required type="text" name="thanhlap_noicap2" size="50px">&nbsp</li>'+
		'<li><button id="btn_removefield1" onclick="removefield1(); return false"><span class="glyphicon glyphicon-remove"></span></button></li>';
		$('#m1_chophep_thanhlap2').append(html);
		$('#thanhlap_ngaycap2').datetimepicker({
			format: 'd/m/Y',
		});
		$('#btn_addfield1').css('display','none');
		$('#thanhlap_ngaycap2').datetimepicker({
			format : 'd/m/Y',
		});
	}

	function removefield1() {
		$('#m1_chophep_thanhlap2').empty();
		$('#btn_addfield1').css('display','block');
	}

	function addfield2() {
		var html =
		'<br><br>'+
		'<li><p>Số:&nbsp</p></li>'+
		'<li><input required type="text" name="m1_hoatdong_so2">&nbsp</li>'+
		'<li><p>Ngày cấp:&nbsp</p></li>'+
		'<li><input required type="text" name="m1_hoatdong_ngaycap2" id="hoatdong_ngaycap2">&nbsp</li>'+
		'<li><p>Nơi cấp:&nbsp</p></li>'+
		'<li><input type="text" name="hoatdong_noicap2" size="50px">&nbsp</li>'+
		'<li><button id="btn_removefield2" onclick="removefield2(); return false"><span class="glyphicon glyphicon-remove"></span></button></li>';
		$('#m1_chophep_hoatdong2').append(html);
		$('#hoatdong_ngaycap2').datetimepicker({
			format: 'd/m/Y',
		});
		$('#hoatdong_ngaycap').datetimepicker({
			format : 'd/m/Y',
		});	
		$('#btn_addfield2').css('display','none');
	}

	function removefield2() {
		$('#m1_chophep_hoatdong2').empty();
		$('#btn_addfield2').css('display','block');
	}
</script>
@endpush