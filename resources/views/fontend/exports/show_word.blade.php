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
	<b>{{csrf_field()}}</b>
	<div id="header" class="form-group">
		<h3 align="center"><b>THÔNG TIN CƠ SỞ ĐÀO TẠO</b></h3>
		<hr>
	</div>

	<div id="body" class="row">
		<div class="col-md-6" id="donvichuquan">
			<ul>
				<h4>Đơn vị chủ quản</h4>
				<li><label>Trung tâm:&nbsp</label></li>
				<li><b><b>{{$data['trungtam']}}</b></b>&nbsp</li>
				<br><br>
				<li><label>Số:&nbsp</label></li>
				<li><b><b>{{$data['so']}}</b></b>&nbsp/</li>
				<li><label>BC:&nbsp</label></li>
				<li><b><b>{{$data['bc']}}</b></b></li>
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
				<li><p><b>{{$data['ngay']}}</b>&nbsp</p></li>
				<li>tháng&nbsp</li>
				<li><b>{{$data['thang']}}</b>&nbsp</li>
				<li><p>năm&nbsp</p></li>
				<li><b>{{$data['nam']}}</b>&nbsp</li>
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
						<li><b>{{$data['congvan_so']}}</b>&nbsp</li>
						<li><p>/SGD&ĐT-GDTX-CN ngày &nbsp</p></li>
						<li><p><b>{{$data['congvan_ngay']}}</b>&nbsp</p></li>
						<li>tháng&nbsp</li>
						<li><b>{{$data['congvan_thang']}}</b>&nbsp</li>
						<li><p>năm&nbsp</p></li>
						<li><b>{{$data['congvan_nam']}}</b>&nbsp</li>
						<li><p>của Sở Giáo dục và Đào tạo Hà Nội về việc báo cáo định kỳ kết quả hoạt động 6 tháng đầu năm 2017 đối với các Trung tâm: giáo dục/đào tạo có vốn ĐTNN;VPĐDGDNN; NN, NN-TH; nghiệp vụ chuyên ngành và các Tổ chức tư vấn du học trên địa bàn Thành phố,</p></li>
						<li><p><b><b>Trung tâm:</b>&nbsp</b></p></li>
						<li><b>{{$data['trungtam']}}</b>&nbsp</li>
						<li><p>báo cáo tình hình và kết quả hoạt động 6 tháng đầu năm 2017 như sau: </p></li>
					</ul>
			</div>
			<div  class="col-md-12 form-group">
				<ul>
					<h4><b>1. Tính pháp lý của cơ sở</b></h4>
					<h5><b>1.1. Thông tin doanh nghiệp</b></h5>
					<p><b><i>Giấy chứng nhận đầu tư/đăng ký doanh nghiệp</i></b></p>
					<li><p>Số:&nbsp</p></li>
					<li><b>{{$data['chungnhan_so']}}</b>&nbsp</li>
					<li><p>Ngày cấp:&nbsp</p></li>
					<li><b>{{$data['chungnhan_ngaycap']}}</b>&nbsp</li>
					<li>Nơi cấp:&nbsp</li>
					<li><b>{{$data['chungnhan_noicap']}}</b>&nbsp</li>
					<br><br>
					<li><p><b><i>Địa chỉ trụ sở chính:&nbsp</i></b></p></li>
					<li><b>{{$data['trusochinh_diachi']}}</b>&nbsp</li>
					<br><br>
					<li><p>ĐT:&nbsp</p></li>
					<li><b>{{$data['trusochinh_dienthoai']}}</b>&nbsp</li>
					<li><p>Fax:&nbsp</p></li>
					<li><b>{{$data['trusochinh_fax']}}</b>&nbsp</li>
					<li><p>Email:&nbsp</p></li>
					<li><b>{{$data['trusochinh_email']}}</b>&nbsp</li>
					<br><br>
					<li><p>Website:&nbsp</p></li>
					<li><b>{{$data['trusochinh_website']}}</b>&nbsp</li>
					<br><br>
					<li><p>Loại hình doanh nghiệp:&nbsp</p></li>
					<li><b>{{$data['loaihinhdoanhnghiep']}}</b>&nbsp</li>
					<br><br>
					<li><p>Thời hạn hoạt động:&nbsp</p></li>
					<li><b>{{$data['thoihan_hoatdong']}}</b>&nbsp</li>
					<br><br>
					<li><p>Mã số thuế:&nbsp</p></li>
					<li><b>{{$data['masothue']}}</b>&nbsp</li>
					<li><p>Vốn đăng ký/điều lệ:&nbsp</p></li>
					<li><b>{{$data['von_dieule']}}</b>&nbsp VNĐ</li>
					<br><br>
					<li><p>Vón góp thực hiện dự án đăng ký/cho Trung Tâm:&nbsp</p></li>
					<li><b>{{$data['von_trungtam']}}</b>&nbsp VNĐ</li>
					<br><br>
					<li><b><i>Người đại diện theo pháp luật</i></b></li>
					<br><br>
					<li><p>Họ và tên:&nbsp</p></li>
					<li><b>{{$data['daidien_hoten']}}</b>&nbsp</li>
					<li><p>Quốc tịch&nbsp</p></li>
					<li><b>{{$data['daidien_quoctich']}}</b>&nbsp</li>
					<br><br>
					<li><p>Điện thoại di động:&nbsp</p></li>
					<li><b>{{$data['daidien_dtdd']}}</b>&nbsp</li>
					<li><p>Email liên hệ:&nbsp</p></li>
					<li><b>{{$data['daidien_email']}}</b>&nbsp</li>
					<br><br>
					<li><p>Nơi ở hiện tại:&nbsp</p></li>
					<li><b>{{$data['daidien_noio']}}</b>&nbsp</li>
					<br><br>
					<h5><b>1.2. Thông tin Trung tâm: giáo dục/đào tạo có vốn ĐTNN; NN, NN-TH; nghiệp vụ chuyên ngành, sau đây gọi tắt là Trung tâm.</b></h5>
					<li><i><b>Tên trung tâm</b>(Tiếng Việt Nam):&nbsp</i></li>
					<li><b>{{$data['tentrungtam_vn']}}</b>&nbsp</li>
					<br><br>
					<li><i>(Tiếng anh, tên giao dịch):&nbsp</i></li>
					<li><b>{{$data['tentrungtam_e']}}</b>&nbsp</li>
					<br><br>
					<div id="m1_chophep_thanhlap">
						<li><i><b>Quyết định cho phép thành lập</b></i></li>
						<br><br>
						<li><p>Số:&nbsp</p></li>
						<li><b>{{$data['thanhlap_so']}}</b>&nbsp</li>
						<li><p>Ngày cấp:&nbsp</p></li>
						<li><b>{{$data['thanhlap_ngaycap']}}</b>&nbsp</li>
						<li><p>Nơi cấp:&nbsp</p></li>
						<li><b>{{$data['thanhlap_noicap']}}</b>&nbsp</li>
					<br><br>
					<li><i><b>Quyết định/Chứng nhận cho phép hoạt động</b></i></li>
					<br><br>
					<div id="m1_chophep_hoatdong">
						<li><p>Số:&nbsp</p></li>
						<li><b>{{$data['hoatdong_so']}}</b>&nbsp</li>
						<li><p>Ngày cấp:&nbsp</p></li>
						<li><b>{{$data['hoatdong_ngaycap']}}</b>&nbsp</li>
						<li><p>Nơi cấp:&nbsp</p></li>
						<li><b>{{$data['hoatdong_noicap']}}</b>&nbsp</li>
					</div>
					<br><br>
					<li><i><b>Giám đốc trung tâm:&nbsp</b>(Ghi rõ từng trung tâm)</i></li>
					<br><br>
					<li><p>Họ và tên:&nbsp</p></li>
					<li><b>{{$data['giamdoc_hoten']}}</b>&nbsp</li>
					<li><p>Quốc tịch:&nbsp</p></li>
					<li><b>{{$data['giamdoc_quoctich']}}</b></li>
					<br><br>
					<li><p>Điện thoại di động:&nbsp</p></li>
					<li><b>{{$data['giamdoc_dienthoai']}}</b>&nbsp</li>
					<li><p>Email liên hệ:&nbsp</p></li>
					<li><b>{{$data['giamdoc_email']}}</b>&nbsp</li>
					<br><br>
					<li><p>Nơi ở hiện tại:&nbsp</p></li>
					<li><p><b>{{$data['giamdoc_noio']}}</b></p></li>
					<br><br>
					<li><i><b>Địa chỉ cơ sở đào tạo:&nbsp</b>(Ghi rõ từng cơ sở)&nbsp</i></li>
					<li><b>{{$data['cosodaotao']}}</b></li>
					<br><br>
					<li><i><b>Nội dung hoạt động được cấp phép:&nbsp</b>(ghi theo Quyết định/Chứng nhận hoạt động)</i>
					</li>
					<br><br>
					<p><b>{{$data['noidung_hoatdong']}}</b></p>
					<br><br>
					<h4><b>2. Báo cáo kết quả hoạt động 6 tháng đầu năm 2017</b></h4>
					<h5><b>2.1. Báo cáo thống kê số liệu đối với Trung tâm:&nbsp</b><i>báo cáo theo mẫu M1a</i></h5>
					<h5><b>2.2. Báo cáo danh sách, thông tin và hồ sơ đối với cán bộ, giáo viên làm việc tại Trung tâm:&nbsp</b><i>báo cáo theo mẫu M1b</i></h5>
					<h5><b>2.3. Báo cáo danh sách, thông tin và hồ sơ đối với lao động người nước ngoài làm việc tại các trường học của Hà Nội mà Trung tâm có hợp tác/liên kết:&nbsp</b><i>báo cáo theo mẫu M1c</i></h5>
					<h5><b>2.4. Đánh giá chung về kết quả hoạt động của Trung tâm 6 tháng đầu năm 2017:</b></h5>
					<h5><b>2.5. Những khó khăn và vướng mắc:</b></h5>
					<p><b>{{$data['vuongmac']}}</b></p>
					<h5><b>2.6. Đề xuất, kiến nghị với các cơ quan chức năng:</b></h5>
					<p><b>{{$data['kiennghi']}}</b></p>
				</ul>
				<br><br>
				<div>
						<ul>
							<h4><b>3. SỐ LIỆU VỀ CƠ SỞ ĐÀO TẠO</b></h4>
							<table>
								<col width="500px">
								<col width="100">
								<tr>
									<td><b>3.1. Loại hình:&nbsp</b></td>
								</tr>
								<tr>
									<td style="padding-left: 30px"><i>3.1.1. Ngoại ngữ</i></td>
									<td><input required type="checkbox" name="loaihinh[]" value="ngoaingu" {{in_array('ngoaingu', $data['loaihinh'])?"checked":""}} disabled></td>
								</tr>
								<tr>
									<td style="padding-left: 30px"><i>3.1.2. Tin học</i></td>
									<td><input required type="checkbox" name="loaihinh[]" value="tinhoc"
									{{in_array('tinhoc', $data['loaihinh'])?"checked":""}} disabled></td>
								</tr>
								<tr>
									<td style="padding-left: 30px"><i>3.1.3. Ngoại ngữ-Tin học</i></td>
									<td><input required type="checkbox" name="loaihinh[]" value="ngoaingu_tinhoc" {{in_array('ngoaingu_tinhoc', $data['loaihinh'])?"checked":""}} disabled></td>
								</tr>
								<tr>
									<td style="padding-left: 30px"><i>3.1.4. Nghiệp vụ chuyên ngành</i></td>
									<td><input required type="checkbox" name="loaihinh[]" value="nghiepvu_chuyennganh" {{in_array('nghiepvu_chuyennganh', $data['loaihinh'])?"checked":""}} disabled></td>
								</tr>
								<tr>
									<td><b>3.2.Học viên:&nbsp</b></td>
								</tr>
								<tr>
									<td style="padding-left: 30px"><i>3.2.1. Số lớp</i></td>
									<td><p><b>{{$data['solop']}}</b></p></td>
								</tr>
								<tr>
									<td style="padding-left: 30px"><i>3.2.2. Số học viên</i></td>
								</tr>
								<tr>
									<td style="padding-left: 60px">3.2.2.1. Năm 2014</td>
									<td><b>{{$data['hocvien_2014']}}</b></td>
								</tr>
								<tr>
									<td style="padding-left: 60px">3.2.2.2 Năm 2015</td>
									<td><b>{{$data['hocvien_2015']}}</b></td>
								</tr>
								<tr>
									<td style="padding-left: 60px">3.2.2.3 Năm 2016</td>
									<td><b>{{$data['hocvien_2016']}}</b></td>
								</tr>
								<tr>
									<td style="padding-left: 60px">3.2.2.4 Năm 2017</td>
									<td><b>{{$data['hocvien_2017']}}</b></td>
								</tr>
								<tr>
									<td><b>3.3. Các mức học phí/khóa:&nbsp</b><i>(Đơn vị 1000 VNĐ)</i></td>
								</tr>
								<tr>
									<td style="padding-left: 30px"><i>3.3.1 Mức 1</i></td>
									<td><b>{{$data['hocphi_muc1']}}</b></td>
								</tr>
								<tr>
									<td style="padding-left: 30px"><i>3.3.2 Mức 2</i></td>
									<td><b>{{$data['hocphi_muc2']}}</b></td>
								</tr>
								<tr>
									<td style="padding-left: 30px"><i>3.3.3 Mức 3</i></td>
									<td><b>{{$data['hocphi_muc3']}}</b></td>
								</tr>
								<tr>
									<td style="padding-left: 30px"><i>3.3.4 Mức 4</i></td>
									<td><b>{{$data['hocphi_muc4']}}</b></td>
								</tr>
								<tr>
									<td><b>3.4. Thống kê cơ sở vật chất:&nbsp</b></td>
								</tr>
								<tr>
									<td style="padding-left: 30px"><i>3.4.1. Tổng số phòng học</i></td>
									<td><b>{{$data['csvc_phonghoc']}}</b></td>
								</tr>
								<tr>
									<td style="padding-left: 30px"><i>3.4.2. Tổng số phòng chức năng</i></td>
									<td><b>{{$data['csvc_phongchucnang']}}</b></td>
								</tr>
								<tr>
									<td style="padding-left: 30px"><i>3.4.3. Thư viện</i></td>
									<td><b>{{$data['csvc_thuvien']}}</b></td>
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
			<a href="{{route('home')}}" class="btn btn-warning">Quay lại <span class="glyphicon glyphicon-arrow-left"></a>
			<a href="{{route('doc.edit',['id'=>$id])}}" class="btn btn-info">Chỉnh sửa <span class="glyphicon glyphicon-edit"></a>
			<a href="{{asset('word/exports/'.$data['ten_tep'])}}" download class="btn btn-success">Tải về tệp Doc <span class="glyphicon glyphicon-export"></a>
		</div>
	</div>
</form>
@endsection
@push('scripts')
@endpush