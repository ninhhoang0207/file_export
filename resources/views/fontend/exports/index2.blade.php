@extends('templates.master')
@section('title')
Thông tin về cán bộ
@endsection
@section('content')
<style type="text/css">
	ul {
		list-style-type: none;
	}
	li {
		float: left;
	}
	th {
		text-align: center;
		padding: auto;
	}

	td {
		padding-bottom: 1em;
	}

</style>
<form method="POST" id="form_m1d">
	{{csrf_field()}}
	<div id="header" class="form-group">
		<h3 align="center"><b>THÔNG TIN CÁN BỘ</b></h3>
		<br>
	</div>
	<div id="body">
		<!-- <ul>
			<li><h4><b>ĐƠN VỊ CHỦ QUẢN</b></h4></li>
			<br><br>
			<li><h4><b>TRUNG TÂM:&nbsp</b></h4></li>
			<li><input required type="text" name="tentrungtam" size="50"></li>
		</ul> -->
		<br><br>
		<h3 align="center"><b>THÔNG TIN VÀ HỒ SƠ ĐỐI VỚI ĐỘI NGŨ CÁN BỘ, GIÁO VIÊN LÀM VIỆC TẠI TRUNG TÂM </b></h3>
		<br>
		<div style="text-align: center;">
			<ul style="display: table; margin-right: auto;margin-left: auto">
				<li><i>(Kèm theo Báo cáo số):&nbsp</i></li>
				<li><input required type="text" name="baocaoso">&nbsp</li>
				<li><i>/BC&nbsp</i></li>
				<li><input required type="text" name="bc">&nbsp</li>
				<br><br>
				<li><i>Ngày&nbsp</i></li>
				<li><i><input required type="text" name="ngay">&nbsp</i></li>
				<li><i>Tháng&nbsp</i></li>
				<li><input required type="text" name="thang">&nbsp</li>
				<li><i>Năm</i></li>
				<li><input required type="text" name="nam">&nbsp</li>
			</ul>
		</div>
		<hr><br><br>
		<div id="body-content">
			<div>
				<ul>
					<table >
						<col width="500px">
						<col width="100">
						<tr>
							<td><b>1.Họ và tên:&nbsp</b></td>
							<td><input required type="text" name="hoten"></td>
						</tr>
						<tr>
							<td><b>2. Giới tính:&nbsp</b></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><input required type="radio" name="gioitinh" value="nam"> Nam</td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><input required type="radio" name="gioitinh" value="nu"> Nữ</td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><input required type="radio" name="gioitinh" value="khac"> Khác</td>
						</tr>
						<tr>
							<td><b>3. Chức vụ, nhiệm vụ:&nbsp</b></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><input required type="radio" name="chucvu" value="quanly"> Quản lý</td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><input required type="radio" name="chucvu" value="gv_huuco"> GV Hữu cơ</td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><input required type="radio" name="chucvu" value="gv_thinhgiang"> GV Thỉnh giảng</td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><input required type="radio" name="chucvu" value="tinhnguyen"> Tình nguyện viên</td>
						</tr>
						<tr>
							<td><b>4.Trình độ:&nbsp</b></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><input required type="radio" name="trinhdo" value="chuyenganh"> Chuyên ngành được đào tạo</td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><input required type="radio" name="trinhdo" value="trendaihoc"> Trên đại học</td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><input required type="radio" name="trinhdo" value="daihoc"> Đại học</td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><input required type="radio" name="trinhdo" value="caodang"> Cao đẳng</td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><input required type="radio" name="trinhdo" value="ngoaingu"> Ngoại ngữ</td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><input required type="radio" name="trinhdo" value="nghiepvu"> Tên chứng chỉ nghiệp vụ sư phạm</td>
						</tr>
						<tr>
							<td><b>5. Quốc tịch</b></td>
							<td><select id="quoctich" name="quoctich"></select></td>
						</tr>
						<tr style="display: none" id="thongtinhochieu">
							<td style="padding-left: 30px"><b>* Thông tin hộ chiếu, visa</b></td>
						</tr>
						<tr style="display: none" id="sohochieu">
							<td style="padding-left: 60px"><i>5.1. Số hộ chiếu</i></td>
							<td><input required type="" name="sohochieu"></td>
						</tr>
						<tr style="display: none" id="hansudung_hochieu_tr">
							<td style="padding-left: 60px"><i>5.2. Ngày hết hạn</i></td>
							<td><input required type="" name="hansudung_hochieu" id="hansudung_hochieu"></td>
						</tr>
						<tr style="display: none" id="sovisa">
							<td style="padding-left: 60px"><i>5.3. Số thẻ tạm trú/Visa</i></td>
							<td><input required type="" name="sovisa"></td>
						</tr>
						<tr style="display: none" id="hansudung_visa_tr">
							<td style="padding-left: 60px"><i>5.4. Thời hạn tạm trú/Visa</i></td>
							<td><input required type="" name="hansudung_visa" id="hansudung_visa"></td>
						</tr>
						<!-- <tr>
							<td style="padding-left: 30px"><i>5.2 Số giấy phép lao động</i></td>
							<td><input required type="" name="giaypheplaodong"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>5.3 Nơi ở hiện tại</i></td>
							<td><input required type="" name="noio"></td>
						</tr> -->
						<tr>
							<td><b>6. Thâm niên công tác:&nbsp</b></td>
							<td><input required type="" name="thamnien"></td>
						</tr>
						<!-- M1c -->
						<tr>
							<td><b>7. Trình độ bằng cấp:&nbsp</b></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><input required type="radio" name="trinhdo" value="chuyenmon"> Chuyên môn</td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><input required type="radio" name="trinhdo" value="ngoaingu"> Ngoại ngữ</td>
						</tr>
						<tr>
							<td><b>8. Thông tin giấy phép lao động</b></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>8.1. Số</i></td>
							<td><input required type="" name="so_giayphep"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>8.2. Ngày hết hạn</i></td>
							<td><input required type="" name="thoihan_giayphep" id="thoihan_giayphep"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>8.3. Địa chỉ nơi làm việc</i></td>
							<td><input required type="" name="diachi_giayphep"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>8.4. Địa chỉ cư chú</i></td>
							<td><input required type="" name="diachi_cutru"></td>
						</tr>
						<tr>
							<td><b>9. Hợp đồng lao động</b></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>9.1 Thời hạn lao động</i></td>
							<td><input required type="" name="thoihan_laodong" id="thoihan_laodong"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>9.2. Trực tiếp</i></td>
							<td><input required type="" name="tructiep"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>9.3. Thông qua đơn vị cung cấp khóa học (Ghi rõ Tên đơn vị)</i></td>
							<td><input required type="" name="tendonvi"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>9.4. Số giờ phân công giảng dạy</i></td>
							<td><input required type="" name="sogiogiangday"></td>
						</tr>
						<!-- M1d -->
						<tr>
							<td><b>10. Thông tin về trường tiếp nhận:&nbsp</b></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>10.1. Trên trường</i></td>
							<td><input required type="" name="tentruong"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>10.2. Quận/Huyện</i></td>
							<td><input required type="" name="quanhuyen"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>10.3. Số lớp</i></td>
							<td><input required type="" name="solop"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>10.4. Tổng số học sinh</i></td>
							<td><input required type="" name="sohocsinh"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>10.5. Số tiết học/tháng</i></td>
							<td><input required type="" name="sotiethoc"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>10.6. Tỷ lệ % GVNN</i></td>
							<td><input required type="" name="tyle_gvnn"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>10.7. Cơ cấu GVNN</i></td>
							<td><input required type="" name="cocau_gvnn"></td>
						</tr>
						<tr>
							<td><b>11. Tên giáo viên ngoại ngữ được phân công&nbsp</b></td>
							<td><input required type="" name="ten_gvnn"></td>
						</tr>
						<tr>
							<td><b>12. Ghi chú:&nbsp</b></td>
							<td><textarea rows="5" cols="50" name="ghichu"></textarea></td>
						</tr>
					</table>
				</ul>
			</div>
		</div>
	</div>
	<div id="bottom" class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<button type="submit" class="btn btn-success">Upload <span class="glyphicon glyphicon-upload"></span></button>
		</div>
	</div>
</form>
@endsection
@push('scripts')
<script type="text/javascript" src='{{asset("js/countries.js")}}'></script>
<script type="text/javascript">
	 $('#quoctich').select2({
	 	placeholder: "Select a State",
	 	allowClear: true
	 });

	 $('#quoctich').on('change',function(e) {
	 	var quoctich = $(this).val();
	 	if (quoctich !== 'VNM' && quoctich !== '') {
	 		$('#thongtinhochieu').css('display','');
	 		$('#sohochieu').css('display','');
	 		$('#hansudung_hochieu_tr').css('display','');
	 		$('#sovisa').css('display','');
	 		$('#hansudung_visa_tr').css('display','');
	 		$('#hansudung_visa').datetimepicker({
	 			format : 'd/m/Y',
	 		});
	 		$('#hansudung_hochieu').datetimepicker({
	 			format : 'd/m/Y',
	 		});
	 	} else {
	 		$('#thongtinhochieu').css('display','none');
	 		$('#sohochieu').css('display','none');
	 		$('#hansudung_hochieu_tr').css('display','none');
	 		$('#sovisa').css('display','none');
	 		$('#hansudung_visa_tr').css('display','none');
	 	}
	 });
	 $('#thoihan_giayphep').datetimepicker({
	 	format : 'd/m/Y',
	 });
	 $('#thoihan_laodong').datetimepicker({
	 	format : 'd/m/Y',
	 });
</script>
@endpush