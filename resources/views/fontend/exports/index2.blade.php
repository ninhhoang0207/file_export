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
	</div>
	<div id="body">
		<br><br>
		<h3 align="center"><b>THÔNG TIN VÀ HỒ SƠ ĐỐI VỚI ĐỘI NGŨ CÁN BỘ, GIÁO VIÊN LÀM VIỆC TẠI TRUNG TÂM </b></h3>
		<br>
		<div style="text-align: center;">
			<ul style="display: table; margin-right: auto;margin-left: auto">
				<li><i>(Kèm theo Báo cáo số):&nbsp</i></li>
				<li><strong>6</strong>&nbsp</li>
				<li><i>/BC&nbsp</i></li>
				<li><strong>1</strong>&nbsp</li>
				<br><br>
				<li><i>Ngày&nbsp</i></li>
				<li><i><strong>17</strong>&nbsp</i></li>
				<li><i>Tháng&nbsp</i></li>
				<li><strong>7</strong>&nbsp</li>
				<li><i>Năm&nbsp</i></li>
				<li><strong>2017</strong>&nbsp</li>
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
							<td style="padding-left: 30px"><input required type="radio" name="trinhdo" value="chuyennganh"> Chuyên ngành được đào tạo</td>
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
						<tr style="display: none" id="hochieu_thongtin">
							<td style="padding-left: 30px"><b>* Thông tin hộ chiếu, visa</b></td>
						</tr>
						<tr style="display: none" id="hochieu_so_tr">
							<td style="padding-left: 60px"><i>5.1. Số hộ chiếu</i></td>
							<td><input required type="" name="hochieu_so" id="hochieu_so" disabled></td>
						</tr>
						<tr style="display: none" id="hochieu_hansudung_tr">
							<td style="padding-left: 60px"><i>5.2. Ngày hết hạn</i></td>
							<td><input required type="" name="hochieu_hansudung" id="hochieu_hansudung" disabled></td>
						</tr>
						<tr style="display: none" id="visa_so_tr">
							<td style="padding-left: 60px"><i>5.3. Số thẻ tạm trú/Visa</i></td>
							<td><input required type="" name="visa_so" id="visa_so" disabled></td>
						</tr>
						<tr style="display: none" id="visa_hansudung_tr">
							<td style="padding-left: 60px"><i>5.4. Thời hạn tạm trú/Visa</i></td>
							<td><input required type="" name="visa_hansudung" id="visa_hansudung" disabled></td>
						</tr>
						
						<tr>
							<td><b>6. Thâm niên công tác:&nbsp</b></td>
							<td><input required type="" name="thamnien"></td>
						</tr>
						<!-- M1c -->
						<tr>
							<td><b>7. Trình độ bằng cấp:&nbsp</b></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><input required type="radio" name="bangcap" value="chuyenmon"> Chuyên môn</td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><input required type="radio" name="bangcap" value="ngoaingu"> Ngoại ngữ</td>
						</tr>
						<tr>
							<td><b>8. Thông tin giấy phép lao động</b></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>8.1. Số</i></td>
							<td><input required type="" name="giayphep_so"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>8.2. Ngày hết hạn</i></td>
							<td><input required type="" name="giayphep_thoihan" id="giayphep_thoihan"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>8.3. Địa chỉ nơi làm việc</i></td>
							<td><input required type="" name="giayphep_lamviec"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>8.4. Địa chỉ cư chú</i></td>
							<td><input required type="" name="giayphep_cutru"></td>
						</tr>
						<tr>
							<td><b>9. Hợp đồng lao động</b></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>9.1 Thời hạn lao động</i></td>
							<td><input required type="" name="hopdong_thoihan" id="hopdong_thoihan"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>9.2. Trực tiếp</i></td>
							<td><input required type="" name="hopdong_tructiep"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>9.3. Thông qua đơn vị cung cấp khóa học (Ghi rõ Tên đơn vị)</i></td>
							<td><input required type="" name="hopdong_tendonvi"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>9.4. Số giờ phân công giảng dạy</i></td>
							<td><input required type="number" min="0" name="hopdong_sogiogiangday"></td>
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
							<td><input required type="number" min="0" name="solop"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>10.4. Tổng số học sinh</i></td>
							<td><input required type="number" min="0" name="sohocsinh"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>10.5. Số tiết học/tháng</i></td>
							<td><input required type="number" min="0" name="sotiethoc"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>10.6. Tỷ lệ % GVNN</i></td>
							<td><input required type="number" min="0" name="tyle_gvnn"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>10.7. Cơ cấu GVNN</i></td>
							<td><input required type="" name="cocau_gvnn"></td>
						</tr>
						<tr>
							<td><b>11. Ghi chú:&nbsp</b></td>
							<td><textarea rows="5" cols="50" name="ghichu"></textarea></td>
						</tr>
					</table>
				</ul>
			</div>
		</div>
	</div>
	<div id="bottom" class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4 form-group">
			<button type="submit" class="btn btn-danger">Thêm mới <span class="glyphicon glyphicon-plus"></span></button>
			<a href="{{route('home')}}" class="btn btn-default">Quay lại <span class="glyphicon glyphicon-arrow-left"></span></a>
		</div>
	</div>
</form>
@endsection
@push('scripts')
<script type="text/javascript" src='{{asset("js/countries.js")}}'></script>
<script type="text/javascript">
	 $('#quoctich').select2({
	 	placeholder: "Select a State",
	 });

	 $('#quoctich').on('change',function(e) {
	 	var quoctich = $(this).val();
	 	if (quoctich !== 'VN' && quoctich !== '') {
	 		$('#hochieu_thongtin').css('display','');
	 		$('#hochieu_so_tr').css('display','');
	 		$('#hochieu_hansudung_tr').css('display','');
	 		$('#visa_so_tr').css('display','');

	 		$('#hochieu_so').prop('disabled','');
	 		$('#hochieu_hansudung').prop('disabled','');
	 		$('#visa_so').prop('disabled','');
	 		$('#visa_hansudung').prop('disabled','');

	 		$('#visa_hansudung_tr').css('display','');
	 		$('#visa_hansudung').datetimepicker({
	 			format : 'd/m/Y',
	 		});
	 		$('#hochieu_hansudung').datetimepicker({
	 			format : 'd/m/Y',
	 		});
	 	} else {
	 		$('#hochieu_thongtin').css('display','none');
	 		$('#hochieu_so_tr').css('display','none');
	 		$('#hochieu_hansudung_tr').css('display','none');
	 		$('#visa_so_tr').css('display','none');
	 		$('#visa_hansudung_tr').css('display','none');
	 		
	 		$('#hochieu_so').prop('disabled',true);
	 		$('#hochieu_hansudung').prop('disabled',true);
	 		$('#visa_hansudung').prop('disabled',true);
	 		$('#visa_so').prop('disabled',true);
	 	}
	 });
	 $('#giayphep_thoihan').datetimepicker({
	 	format : 'd/m/Y',
	 });
	 $('#laodong_thoihan').datetimepicker({
	 	format : 'd/m/Y',
	 });
</script>
@endpush