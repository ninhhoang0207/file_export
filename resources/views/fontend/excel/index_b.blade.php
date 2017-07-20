@extends('templates.master')
@section('title')
Export Excel M1b
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
<form method="POST" id="form_m1b">
	{{csrf_field()}}
	<div id="header" class="form-group">
		<h3 align="center"><b>Mẫu M1b</b></h3>
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
		<h3 align="center"><b>BÁO CÁO DANH SÁCH, THÔNG TIN VÀ HỒ SƠ ĐỐI VỚI ĐỘI NGŨ CÁN BỘ, GIÁO VIÊN LÀM VIỆC TẠI TRUNG TÂM</b></h3>
		<br>
		<div style="text-align: center;">
			<ul style="display: table; margin-right: auto;margin-left: auto">
				<li><i>(Kèm theo Báo cáo số):&nbsp</i></li>
				<li><input required type="text" name="baocaoso">&nbsp</li>
				<li><i>/BC&nbsp</i></li>
				<li><input required type="text" name="bc">&nbsp</li>
				<br>
				<br>
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
							<td><b>5. Đối với cán bộ, giáo viên, nhân viên lao động nước ngoài</b></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>5.1 Quốc tịch</i></td>
							<td><input required type="" name="quoctich"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>5.2 Số hộ chiếu</i></td>
							<td><input required type="" name="hochieu"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>5.3 Số giấy phép lao động</i></td>
							<td><input required type="" name="giaypheplaodong"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>5.4 Nơi ở hiện tại</i></td>
							<td><input required type="" name="noio"></td>
						</tr>
						<tr>
							<td><b>6. Thâm niên công tác:&nbsp</b></td>
							<td><input required type="" name="thamnien"></td>
						</tr>
						<tr>
							<td><b>7. Ghi chú:&nbsp</b></td>
							<td><textarea required rows="5" cols="50" name="ghichu"></textarea></td>
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
	$('#form_m1b').validate();
	$.validator.messages.required = 'Vui lòng nhập đầy đủ thông tin';
</script>
@endpush