@extends('templates.master')
@section('title')
Export Excel M1a
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
<form method="POST" id="form_m1a">
	{{csrf_field()}}
	<div id="header" class="form-group">
		<h3 align="center"><b>Mẫu M1a</b></h3>
		<hr>
	</div>
	<div id="body">
		<ul>
			<li><h4><b>ĐƠN VỊ CHỦ QUẢN</b></h4></li>
			<br><br>
			<li><h4><b>TRUNG TÂM:&nbsp</b></h4></li>
			<li><input required type="text" name="" size="50"></li>
		</ul>
		<br><br>
		<h3 align="center"><b>BÁO CÁO SỐ LIỆU THỐNG KÊ ĐỐI VỚI CÁC TRUNG TÂM</b></h3>
		<div>
			<ul style="display: table; margin-right: auto;margin-left: auto">
				<li><i>(Kèm theo Báo cáo số):&nbsp</i></li>
				<li><input required type="text" name="baocaoso" required>&nbsp</li>
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
		<br><br><br>
		<div id="body-content">
			<div>
				<ul>
					<table class="table">
						<col width="30">
						<col width="100">
						<tr>
							<td><b>1.Tên trung tâm:&nbsp</b></td>
							<td><input required type="text" name="tentrungtam"></td>
						</tr>
						<tr>
							<td><b>2.Địa chỉ các cơ sở đào tạo:&nbsp</b></td>
							<td><input required type="text" name="diachi"></td>
						</tr>
						<tr>
							<td><b>3.Địa chỉ Email:&nbsp</b></td>
							<td><input required type="text" name="email"></td>
						</tr>
						<tr>
							<td><b>4.Điện thoại:&nbsp</b></td>
							<td><input required type="text" name="dienthoai"></td>
						</tr>
						<tr>
							<td><b>5.Loại hình:&nbsp</b></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>5.1 Ngoại ngữ</i></td>
							<td><input required type="checkbox" name="loaihinh[]" value="ngoaingu"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>5.2 Tin học</i></td>
							<td><input required type="checkbox" name="loaihinh[]" value="tinhoc"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>5.3 Ngoại ngữ-Tin học</i></td>
							<td><input required type="checkbox" name="loaihinh[]" value="ngoaingu_tinhoc"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>5.4 Nghiệp vụ chuyên ngành</i></td>
							<td><input required type="checkbox" name="loaihinh[]" value="nghiepvu_chuyennganh"></td>
						</tr>
						<tr>
							<td><b>6.Giấy chứng nhận hoạt động:&nbsp</b></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>6.1 Số/Ngày cấp lần đầu</i></td>
							<td><input required type="" name="chungnhan_landau"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>6.2 Số/Ngày cấp GP hiện tại</i></td>
							<td><input required type="" name="chungnhan_hientai"></td>
						</tr>
						<tr>
							<td><b>7.Nội dung được phép hoạt động</b></td>
							<td><input required type="" name="noidung_hoatdong"></td>
						</tr>
						<tr>
							<td><b>8.Tổng số giáo viên:&nbsp</b></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>8.1 Giáo viên nước ngoài</i></td>
							<td><input required type="" name="giaovien_nuocngoai"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>8.2 Giáo viên Việt Nam</i></td>
							<td><input required type="" name="giaovien_vietnam"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>8.3 Tổng số giáo viên</i></td>
							<td><input required type="" name="giaovien_tong"></td>
						</tr>
						<tr>
							<td><b>9.Học viên:&nbsp</b></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>9.1 Số lớp</i></td>
							<td><input required type="" name="solop"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>9.2 Số học viên</i></td>
						</tr>
						<tr>
							<td style="padding-left: 60px">9.2.1 Năm 2014</td>
							<td><input required type="" name="hocvien_2014"></td>
						</tr>
						<tr>
							<td style="padding-left: 60px">9.2.2 Năm 2015</td>
							<td><input required type="" name="hocvien_2015"></td>
						</tr>
						<tr>
							<td style="padding-left: 60px">9.2.3 Năm 2016</td>
							<td><input required type="" name="hocvien_2016"></td>
						</tr>
						<tr>
							<td style="padding-left: 60px">9.2.4 Năm 2017</td>
							<td><input required type="" name="hocvien_2017"></td>
						</tr>
						<tr>
							<td><b>10.Các mức học phí/khóa:&nbsp</b><i>(Đơn vị 1000 VNĐ)</i></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>10.1 Mức 1</i></td>
							<td><input required type="" name="hocphi_muc1"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>10.2 Mức 2</i></td>
							<td><input required type="" name="hocphi_muc2"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>10.3 Mức 3</i></td>
							<td><input required type="" name="hocphi_muc3"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>10.4 Mức 4</i></td>
							<td><input required type="" name="hocphi_muc4"></td>
						</tr>
						<tr>
							<td><b>11.Thống kê cơ sở vật chất:&nbsp</b></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>11.1 Tổng số phòng học</i></td>
							<td><input required type="" name="csvc_phonghoc"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>11.2 Tổng số phòng chức năng</i></td>
							<td><input required type="" name="csvc_phongchucnang"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>11.3 Thư viện</i></td>
							<td><input required type="" name="csvc_thuvien"></td>
						</tr>
					</table>
				</ul>
			</div>
		</div>
	</div>
	<div id="bottom" class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<button type="submit" class="btn btn-success">Upload</button>
		</div>
	</div>
</form>
@endsection

@push('scripts')
<script type="text/javascript">
	$('#form_m1a').validate();
	$.validator.messages.required = 'Vui lòng nhập đầy đủ thông tin';
</script>
@endpush