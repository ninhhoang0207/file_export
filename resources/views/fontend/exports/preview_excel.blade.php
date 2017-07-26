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
				<li><strong>{{$data_header['so']}}</strong>&nbsp</li>
				<li><i>/BC&nbsp</i></li>
				<li><strong>{{$data_header['bc']}}</strong>&nbsp</li>
				<br><br>
				<li><i>Ngày&nbsp</i></li>
				<li><i><strong>{{$data_header['ngay']}}</strong>&nbsp</i></li>
				<li><i>Tháng&nbsp</i></li>
				<li><strong>{{$data_header['thang']}}</strong>&nbsp</li>
				<li><i>Năm&nbsp</i></li>
				<li><strong>{{$data_header['nam']}}</strong>&nbsp</li>
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
							<td><b>{{$data['hoten']}}</b></td>
						</tr>
						<tr>
							<td><b>2. Giới tính:&nbsp</b></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><input required type="radio" name="gioitinh" value="nam" {{$data['gioitinh']=='nam'?"checked":""}} disabled> Nam</td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><input required type="radio" name="gioitinh" value="nu" {{$data['gioitinh']=='nu'?"checked":""}} disabled> Nữ</td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><input required type="radio" name="gioitinh" value="khac" {{$data['gioitinh']=='khac'?"checked":""}} disabled> Khác</td>
						</tr>
						<tr>
							<td><b>3. Chức vụ, nhiệm vụ:&nbsp</b></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><input required type="radio" name="chucvu" value="quanly" {{$data['chucvu']=='quanly'?"checked":""}} disabled> Quản lý</td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><input required type="radio" name="chucvu" value="gv_huuco" {{$data['chucvu']=='gv_huuco'?"checked":""}} disabled> GV Hữu cơ</td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><input required type="radio" name="chucvu" value="gv_thinhgiang" {{$data['chucvu']=='gv_thinhgiang'?"checked":""}} disabled> GV Thỉnh giảng</td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><input required type="radio" name="chucvu" value="tinhnguyen" {{$data['chucvu']=='tinhnguyen'?"checked":""}} disabled> Tình nguyện viên</td>
						</tr>
						<tr>
							<td><b>4.Trình độ:&nbsp</b></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><input required type="radio" name="trinhdo" value="chuyennganh" {{$data['trinhdo']=='chuyennganh'?"checked":""}} disabled> Chuyên ngành được đào tạo</td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><input required type="radio" name="trinhdo" value="trendaihoc" {{$data['trendaihoc']=='trendaihoc'?"checked":""}} disabled> Trên đại học</td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><input required type="radio" name="trinhdo" value="daihoc" {{$data['trinhdo']=='daihoc'?"checked":""}} disabled> Đại học</td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><input required type="radio" name="trinhdo" value="caodang" {{$data['trinhdo']=='caodang'?"checked":""}} disabled> Cao đẳng</td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><input required type="radio" name="trinhdo" value="ngoaingu" {{$data['trinhdo']=='ngoaingu'?"checked":""}} disabled> Ngoại ngữ</td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><input required type="radio" name="trinhdo" value="nghiepvu" {{$data['trinhdo']=='nghiepvu'?"checked":""}} disabled> Tên chứng chỉ nghiệp vụ sư phạm</td>
						</tr>
						<tr>
							<td><b>5. Quốc tịch</b></td>
							<td><select id="quoctich" name="quoctich" disabled></select></td>
						</tr>
						@if ($data['quoctich'] != "VN")
						<tr id="hochieu_thongtin">
							<td style="padding-left: 30px"><b>* Thông tin hộ chiếu, visa</b></td>
						</tr>
						<tr id="hochieu_so_tr">
							<td style="padding-left: 60px"><i>5.1. Số hộ chiếu</i></td>
							<td><b>{{$data['hochieu_so']}}</b></td>
						</tr>
						<tr id="hochieu_hansudung_tr">
							<td style="padding-left: 60px"><i>5.2. Ngày hết hạn</i></td>
							<td><b>{{$data['hochieu_hansudung']}}</b></td>
						</tr>
						<tr id="visa_so_tr">
							<td style="padding-left: 60px"><i>5.3. Số thẻ tạm trú/Visa</i></td>
							<td><b>{{$data['visa_so']}}</b></td>
						</tr>
						<tr id="visa_hansudung_tr">
							<td style="padding-left: 60px"><i>5.4. Thời hạn tạm trú/Visa</i></td>
							<td><b>{{$data['visa_hansudung']}}</b></td>
						</tr>
						@endif
						<tr>
							<td><b>6. Thâm niên công tác:&nbsp</b></td>
							<td><b>{{$data['thamnien']}}</b></td>
						</tr>
						<!-- M1c -->
						<tr>
							<td><b>7. Trình độ bằng cấp:&nbsp</b></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><input required type="radio" name="bangcap" value="chuyenmon" {{$data['bangcap']=='chuyenmon'?'checked':''}} disabled> Chuyên môn</td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><input required type="radio" name="bangcap" value="ngoaingu" {{$data['bangcap']=='ngoaingu'?'checked':''}} disabled> Ngoại ngữ</td>
						</tr>
						<tr>
							<td><b>8. Thông tin giấy phép lao động</b></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>8.1. Số</i></td>
							<td><b>{{$data['giayphep_so']}}</b></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>8.2. Ngày hết hạn</i></td>
							<td><b>{{$data['giayphep_thoihan']}}</b></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>8.3. Địa chỉ nơi làm việc</i></td>
							<td><b>{{$data['giayphep_lamviec']}}</b></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>8.4. Địa chỉ cư chú</i></td>
							<td><b>{{$data['giayphep_cutru']}}</b></td>
						</tr>
						<tr>
							<td><b>9. Hợp đồng lao động</b></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>9.1 Thời hạn lao động</i></td>
							<td><b>{{$data['hopdong_thoihan']}}</b></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>9.2. Trực tiếp</i></td>
							<td><b>{{$data['hopdong_tructiep']}}</b></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>9.3. Thông qua đơn vị cung cấp khóa học (Ghi rõ Tên đơn vị)</i></td>
							<td><b>{{$data['hopdong_tendonvi']}}</b></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>9.4. Số giờ phân công giảng dạy</i></td>
							<td><b>{{$data['hopdong_sogiogiangday']}}</b></td>
						</tr>
						<!-- M1d -->
						<tr>
							<td><b>10. Thông tin về trường tiếp nhận:&nbsp</b></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>10.1. Trên trường</i></td>
							<td><b>{{$data['tentruong']}}</b></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>10.2. Quận/Huyện</i></td>
							<td><b>{{$data['quanhuyen']}}</b></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>10.3. Số lớp</i></td>
							<td><b>{{$data['solop']}}</b></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>10.4. Tổng số học sinh</i></td>
							<td><b>{{$data['sohocsinh']}}</b></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>10.5. Số tiết học/tháng</i></td>
							<td><b>{{$data['sotiethoc']}}</b></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>10.6. Tỷ lệ % GVNN</i></td>
							<td><b>{{$data['tyle_gvnn']}}</b></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>10.7. Cơ cấu GVNN</i></td>
							<td><b>{{$data['cocau_gvnn']}}</b></td>
						</tr>
						<tr>
							<td><b>11. Ghi chú:&nbsp</b></td>
							<td><b>{{$data['ghichu']}}</b></td>
						</tr>
					</table>
				</ul>
			</div>
		</div>
	</div>
	<div id="bottom" class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4 form-group">
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

	 // $("#quoctich").attr("value", "{{$data['quoctich']}}");
	 $("#quoctich").val("{{$data['quoctich']}}").change();
</script>
@endpush