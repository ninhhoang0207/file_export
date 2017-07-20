@extends('templates.master')
@section('title')
Export Excel M1c
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
</style>
<form method="POST" id="form_m1c">
	{{csrf_field()}}
	<div id="header" class="form-group">
		<h3 align="center"><b>Mẫu M1c</b></h3>
		<hr>
	</div>
	<div id="body">
		<ul>
			<li><h4><b>ĐƠN VỊ CHỦ QUẢN</b></h4></li>
			<br><br>
			<li><h4><b>TRUNG TÂM:&nbsp</b></h4></li>
			<li><input required type="text" name="tentrungtam" size="50"></li>
		</ul>
		<br><br>
		<h3 align="center"><b>BÁO CÁO DANH SÁCH, THÔNG TIN VÀ HỒ SƠ ĐỐI VỚI LAO ĐỘNG NƯỚC NGOÀI CỦA TRUNG TÂM HIỆN ĐANG GIẢNG DẠY TẠI CÁC TRƯỜNG HỌC CỦA HÀ NỘI </b></h3>
		<br><br>
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
					<table class="table">
						<col width="30">
						<col width="100">
						<tr>
							<td><b>1.Họ và tên:&nbsp</b></td>
							<td><input required type="text" name="hoten"></td>
						</tr>
						<tr>
							<td><b>2. Quốc tịch</b></td>
							<td><input required type="" name="quoctich"></td>
						</tr>
						<tr>
							<td><b>3. Giới tính:&nbsp</b></td>
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
							<td><b>4. Trình độ bằng cấp:&nbsp</b></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><input required type="radio" name="trinhdo" value="chuyenmon"> Chuyên môn</td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><input required type="radio" name="trinhdo" value="ngoaingu"> Ngoai ngữ</td>
						</tr>
						<tr>
							<td><b>5. Thông tin hộ chiếu, visa</b></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>5.1 Số hộ chiếu</i></td>
							<td><input required type="" name="sohochieu"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>5.2. Ngày hết hạn</i></td>
							<td><input required type="" name="hansudung_hochieu" id="hansudung_hochieu"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>5.3. Số thẻ tạm trú/Visa</i></td>
							<td><input required type="" name="sovisa"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>5.4. Thời hạn tạm trú/Visa</i></td>
							<td><input required type="" name="hansudung_visa" id="hansudung_visa"></td>
						</tr>
						<tr>
							<td><b>6. Thông tin giấy phép lao động</b></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>6.1 Số</i></td>
							<td><input required type="" name="so_giayphep"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>6.2. Ngày hết hạn</i></td>
							<td><input required type="" name="thoihan_giayphep" id="thoihan_giayphep"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>6.3. Địa chỉ nơi làm việc</i></td>
							<td><input required type="" name="diachi_giayphep"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>6.4. Địa chỉ cư chú</i></td>
							<td><input required type="" name="diachi_cutru"></td>
						</tr>
						<tr>
							<td><b>7. Hợp đồng lao động</b></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>7.1 Thời hạn lao động</i></td>
							<td><input required type="" name="thoihan_laodong" id="thoihan_laodong"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>7.2. Trực tiếp</i></td>
							<td><input required type="" name="tructiep"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>7.3. Thông qua đơn vị cung cấp khóa học (Ghi rõ Tên đơn vị)</i></td>
							<td><input required type="" name="tendonvi"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>7.4. Số giờ phân công giảng dạy</i></td>
							<td><input required type="" name="sogiogiangday"></td>
						</tr>
						<tr>
							<td><b>8. Ghi chú:&nbsp</b></td>
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
<script type="text/javascript">
	$('#form_m1c').validate();
	$.validator.messages.required = 'Vui lòng nhập đầy đủ thông tin';

	$('#hansudung_hochieu').datetimepicker({
		format:'d/m/Y',
	});
	$('#thoihan_laodong').datetimepicker({
		format:'d/m/Y',
	});
	$('#thoihan_giayphep').datetimepicker({
		format:'d/m/Y',
	});
	$('#hansudung_visa').datetimepicker({
		format:'d/m/Y',
	});
</script>
@endpush