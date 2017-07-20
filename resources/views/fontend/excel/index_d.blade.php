@extends('templates.master')
@section('title')
Export Excel M1d
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
<form method="POST" id="form_m1d">
	{{csrf_field()}}
	<div id="header" class="form-group">
		<h3 align="center"><b>Mẫu M1d</b></h3>
		<br>
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
					<table class="table">
						<col width="30">
						<col width="100">
						<tr>
							<td><b>1. Thông tin về trường tiếp nhận:&nbsp</b></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>1.1. Trên trường</i></td>
							<td><input required type="" name="tentruong"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>1.2. Quận/Huyện</i></td>
							<td><input required type="" name="quanhuyen"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>1.3. Số lớp</i></td>
							<td><input required type="" name="solop"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>1.4. Tổng số học sinh</i></td>
							<td><input required type="" name="sohocsinh"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>1.5. Số tiết học/tháng</i></td>
							<td><input required type="" name="sotiethoc"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>1.6. Tỷ lệ % GVNN</i></td>
							<td><input required type="" name="tyle_gvnn"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>1.7. Cơ cấu GVNN</i></td>
							<td><input required type="" name="cocau_gvnn"></td>
						</tr>
						<tr>
							<td><b>2. Tên giáo viên ngoại ngữ được phân công&nbsp</b></td>
							<td><input required type="" name="ten_gvnn"></td>
						</tr>
						<tr>
							<td><b>3. Ghi chú:&nbsp</b></td>
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
	$('#form_m1d').validate();
	$.validator.messages.required = 'Vui lòng nhập đầy đủ thông tin';
</script>
@endpush