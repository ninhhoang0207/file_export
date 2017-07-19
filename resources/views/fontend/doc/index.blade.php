@extends('templates.master')
@section('title')
Export Doc M1
@endsection
@section('content')
<style type="text/css">
	ul {
		list-style: none;
	}
	li {
		float: left;
	}
</style>
<form method="POST">
	{{csrf_field()}}
	<div id="header" class="form-group">
		<h3 align="center"><b>Mẫu M1</b></h3>
		<hr>
	</div>

	<div id="body" class="row">
		<div class="col-md-6" id="donvichuquan">
			<ul>
				<h4>Đơn vị chủ quản</h4>
				<li><label>Trung tâm:&nbsp</label></li>
				<li><input type="text" name="0_0_trungtam">&nbsp</li>
				<br><br>
				<li><label>Số:&nbsp</label></li>
				<li><input type="number" name="0_0_so">&nbsp/</li>
				<li><label>BC:&nbsp</label></li>
				<li><input type="number" name="0_0_bc"></li>
				<br><br>
				<li><label>VV  báo cáo tình hình hoạt động Trung tâm 6 tháng đầu năm 2017</label></li>
			</ul>
		</div>
		<div class="col-md-6" id="modau">
			<p align="center">Cộng hòa Xã hội Chủ nghĩa Việt Nam</p>
			<p align="center"><b>Độc lập - Tự do - Hạnh phúc</b></p>
			<hr>
			<ul>
				<li><label>Hà nội, Ngày:&nbsp</label></li>
				<li><input type="text" name="0_0_ngay" id="datetimepicker"></li>
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
						<li><input type="text" name="0_1_congvanso">&nbsp</li>
						<li><p>/SGD&ĐT-GDTX-CN ngày &nbsp</p></li>
						<li><p><input type="number" name="0_1_ngay">&nbsp</p></li>
						<li>tháng&nbsp</li>
						<li><input type="number" name="0_1_thang">&nbsp</li>
						<li><p>năm&nbsp</p></li>
						<li><input type="number" name="0_1_nam">&nbsp</li>
						<li><p>của Sở Giáo dục và Đào tạo Hà Nội về việc báo cáo định kỳ kết quả hoạt động 6 tháng đầu năm 2017 đối với các Trung tâm: giáo dục/đào tạo có vốn ĐTNN;VPĐDGDNN; NN, NN-TH; nghiệp vụ chuyên ngành và các Tổ chức tư vấn du học trên địa bàn Thành phố,</p></li>
						<li><p><b><b>Trung tâm</b>&nbsp</b></p></li>
						<li><input type="text" name="0_1_trungtam"\>&nbsp</li>
						<li><p>báo cáo tình hình và kết quả hoạt động 6 tháng đầu năm 2017 như sau: </p></li>
					</ul>
			</div>
			<div  class="col-md-12 form-group">
				<ul>
					<h4><b>1- Tính pháp lý của cơ sở</b></h4>
					<h5><b>1.1. Thông tin doanh nghiệp</b></h5>
					<p><b><i>Giấy chứng nhận đầu tư/đăng ký doanh nghiệp:</i></b></p>
					<li><p>Số:&nbsp</p></li>
					<li><input type="text" name="1_1_so">&nbsp</li>
					<li><p>Ngày cấp&nbsp</p></li>
					<li><input type="text" name="1_1_ngaycap" id="1_1_datetimepicker">&nbsp</li>
					<li>Nơi cấp&nbsp</li>
					<li><input type="text" name="1_1_noicap" size="100px">&nbsp</li>
					<br><br>
					<li><p><b><i>Địa chỉ trụ sở chính:&nbsp</i></b></p></li>
					<li><input type="text" name="1_1_trusochinh">&nbsp</li>
					<br><br>
					<li><p>ĐT:&nbsp</p></li>
					<li><input type="number" name="1_1_dienthoai">&nbsp</li>
					<li><p>Fax:&nbsp</p></li>
					<li><input type="number" name="1_1_fax">&nbsp</li>
					<li><p>Email:&nbsp</p></li>
					<li><input type="email" name="1_1_email1" size="104px">&nbsp</li>
					<br><br>
					<li><p>Website:&nbsp</p></li>
					<li><input type="text" name="1_1_website">&nbsp</li>
					<br><br>
					<li><p>Loại hình doanh nghiệp&nbsp</p></li>
					<li><input type="text" name="1_1_loaihinhdn" size="149px">&nbsp</li>
					<br><br>
					<li><p>Thời hạn hoạt động:&nbsp</p></li>
					<li><input type="text" name="1_1_thoihan">&nbsp</li>
					<br><br>
					<li><p>Mã số thuế:&nbsp</p></li>
					<li><input type="text" name="1_1_masothue">&nbsp</li>
					<li><p>Vốn đăng ký/điều lệ:&nbsp</p></li>
					<li><input type="text" name="1_1_von_dieule">&nbsp VNĐ</li>
					<br><br>
					<li><p>Vón góp thực hiện dự án đăng ký/cho Trung Tâm:&nbsp</p></li>
					<li><input type="text" name="1_1_von_trungtam">&nbsp VNĐ</li>
					<br><br>
					<li><b><i>Người đại diện theo pháp luật</i></b></li>
					<br><br>
					<li><p>Họ và tên:&nbsp</p></li>
					<li><input type="text" name="1_1_hoten">&nbsp</li>
					<li><p>Quốc tịch&nbsp</p></li>
					<li><input type="text" name="1_1_quoctich">&nbsp</li>
					<br><br>
					<li><p>Điện thoại di động:&nbsp</p></li>
					<li><input type="number" name="1_1_dtdd">&nbsp</li>
					<li><p>Email liên hệ:&nbsp</p></li>
					<li><input type="text" name="1_1_email2">&nbsp</li>
					<br><br>
					<li><p>Nơi ở hiện tại:&nbsp</p></li>
					<li><input type="text" name="1_1_noio" size="160px">&nbsp</li>
					<br><br>
					<h5><b>1.2. Thông tin Trung tâm: giáo dục/đào tạo có vốn ĐTNN; NN, NN-TH; nghiệp vụ chuyên ngành, sau đây gọi tắt là Trung tâm</b></h5>
					<li><i><b>Tên trung tâm</b>(Tiếng Việt Nam):&nbsp</i></li>
					<li><input type="text" name="1_2_tentrungtam_vn">&nbsp</li>
					<br><br>
					<li><i>(Tiếng anh, tên giao dịch):&nbsp</i></li>
					<li><input type="text" name="1_2_tentrungtam_e">&nbsp</li>
					<br><br>
					<li><i><b>Quyết định cho phép thành lập</b></i></li>
					<br><br>
					<li><p>Số:&nbsp</p></li>
					<li><input type="text" name="1_2_thanhlap_so">&nbsp</li>
					<li><p>Ngày cấp:&nbsp</p></li>
					<li><input type="text" name="1_2_thanhlap_ngaycap">&nbsp</li>
					<li><p>Nơi cấp:&nbsp</p></li>
					<li><input type="text" name="1_2_thanhlap_noicap">&nbsp</li>
					<br><br>
					<li><i><b>Quyết định/Chứng nhận cho phép hoạt động</b></i></li>
					<br><br>
					<li><p>Số:&nbsp</p></li>
					<li><input type="text" name=1_2_hoatdong_so></li>
					<li><p>Ngày cấp:&nbsp</p></li>
					<li><input type="text" name="1_2_hoatdong_ngaycap">&nbsp</li>
					<li><p>Nơi cấp:&nbsp</p></li>
					<li><input type="text" name="1_2_hoatdong_noicap">&nbsp</li>
					<br><br>
					<li><i><b>Giám đốc trung tâm:&nbsp</b>(Ghi rõ từng trung tâm)</i></li>
					<br><br>
					<li><p>Họ và tên:&nbsp</p></li>
					<li><input type="text" name="1_2_gd_hoten">&nbsp</li>
					<li><p>Quốc tịch:&nbsp</p></li>
					<li><input type="text" name="1_2_gd_quoctich"></li>
					<br><br>
					<li><p>Điện thoại di động:&nbsp</p></li>
					<li><input type="number" name="1_2_gd_dienthoai">&nbsp</li>
					<li><p>Email liên hệ&nbsp</p></li>
					<li><input type="email" name="1_2_gd_email">&nbsp</li>
					<br><br>
					<li><p>Nơi ở hiện tại:&nbsp</p></li>
					<input type="text" name="1_2_gd_noio">
					<br><br>
					<li><i><b>Địa chỉ cơ sở đào tạo:&nbsp</b>(Ghi rõ từng cơ sở)</i></li>
					<li><input type="text" name="1_2_coso"></li>
					<br><br>
					<li><i><b>Nội dung hoạt động được cấp phép:&nbsp</b>(ghi theo Quyết định/Chứng nhận hoạt động)</i></li>
					<br><br>
					<h5><b>2. Báo cáo kết quả hoạt động 6 tháng đầu năm 2017</b></h5>
					<h5><b>2.1. Báo cáo thống kê số liệu đối với Trung tâm:&nbsp</b><i>báo cáo theo mẫu M1a</i></h5>
					<h5><b>2.2. Báo cáo danh sách, thông tin và hồ sơ đối với cán bộ, giáo viên làm việc tại Trung tâm:&nbsp</b><i>báo cáo theo mẫu M1b</i></h5>
					<h5><b>2.3. Báo cáo danh sách, thông tin và hồ sơ đối với lao động người nước ngoài làm việc tại các trường học của Hà Nội mà Trung tâm có hợp tác/liên kết:&nbsp</b><i>báo cáo theo mẫu M1c</i></h5>
					<h5><b>2.4. Đánh giá chung về kết quả hoạt động của Trung tâm 6 tháng đầu năm 2017:</b></h5>
					<h5><b>2.5. Những khó khăn và vướng mắc:</b></h5>
					<textarea rows="5" cols="170" name="2_5_vuongmac"></textarea>
					<h5><b>2.6. Đề xuất, kiến nghị với các cơ quan chức năng:</b></h5>
					<textarea rows="5" cols="170" name="2_6_kiennghi"></textarea>
				</ul>
				<br>
			</div>
		</div>
	</div>
	<div id="footer" class="row">
		<div class="col-md-4"></div>
		<div><button type="submit" class="btn btn-success">Tải lên</button></div>
	</div>
</form>
@endsection
@push('scripts')
<script type="text/javascript">
	$('#datetimepicker').datetimepicker({
		format:'d/m/Y',
	});
	$('#1_1_datetimepicker').datetimepicker({
		format:'d/m/Y',
	});
</script>
@endpush