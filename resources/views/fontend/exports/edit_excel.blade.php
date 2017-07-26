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
	<input type="hidden" name="company_id" value="{{$data_header['id']}}">
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
							<td><input required type="text" name="hoten" value="{{$data['hoten']}}"></td>
						</tr>
						<tr>
							<td><b>2. Giới tính:&nbsp</b></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><input required type="radio" name="gioitinh" value="nam" {{$data['gioitinh']=='nam'?"checked":""}}> Nam</td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><input required type="radio" name="gioitinh" value="nu" {{$data['gioitinh']=='nu'?"checked":""}}> Nữ</td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><input required type="radio" name="gioitinh" value="khac" {{$data['gioitinh']=='khac'?"checked":""}}> Khác</td>
						</tr>
						<tr>
							<td><b>3. Chức vụ, nhiệm vụ:&nbsp</b></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><input required type="radio" name="chucvu" value="quanly" {{$data['chucvu']=='quanly'?"checked":""}}> Quản lý</td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><input required type="radio" name="chucvu" value="gv_huuco" {{$data['chucvu']=='gv_huuco'?"checked":""}}> GV Hữu cơ</td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><input required type="radio" name="chucvu" value="gv_thinhgiang" {{$data['chucvu']=='gv_thinhgiang'?"checked":""}}> GV Thỉnh giảng</td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><input required type="radio" name="chucvu" value="tinhnguyen" {{$data['chucvu']=='tinhnguyen'?"checked":""}}> Tình nguyện viên</td>
						</tr>
						<tr>
							<td><b>4.Trình độ:&nbsp</b></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><input required type="radio" name="trinhdo" value="chuyennganh" {{$data['trinhdo']=='chuyennganh'?"checked":""}}> Chuyên ngành được đào tạo</td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><input required type="radio" name="trinhdo" value="trendaihoc" {{$data['trinhdo']=='trendaihoc'?"checked":""}}> Trên đại học</td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><input required type="radio" name="trinhdo" value="daihoc" {{$data['trinhdo']=='daihoc'?"checked":""}}> Đại học</td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><input required type="radio" name="trinhdo" value="caodang" {{$data['trinhdo']=='caodang'?"checked":""}}> Cao đẳng</td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><input required type="radio" name="trinhdo" value="ngoaingu" {{$data['trinhdo']=='ngoaingu'?"checked":""}}> Ngoại ngữ</td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><input required type="radio" name="trinhdo" value="nghiepvu" {{$data['trinhdo']=='nghiepvu'?"checked":""}}> Tên chứng chỉ nghiệp vụ sư phạm</td>
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
							<td><input required type="" name="thamnien" value="{{$data['thamnien']}}"></td>
						</tr>
						<!-- M1c -->
						<tr>
							<td><b>7. Trình độ bằng cấp:&nbsp</b></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><input required type="radio" name="bangcap" value="chuyenmon" {{$data['bangcap']=='chuyenmon'?'checked':''}}> Chuyên môn</td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><input required type="radio" name="bangcap" value="ngoaingu" {{$data['bangcap']=='ngoaingu'?'checked':''}}> Ngoại ngữ</td>
						</tr>
						<tr>
							<td><b>8. Thông tin giấy phép lao động</b></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>8.1. Số</i></td>
							<td><input required type="" name="giayphep_so" value="{{$data['giayphep_so']}}"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>8.2. Ngày hết hạn</i></td>
							<td><input required type="" name="giayphep_thoihan" id="giayphep_thoihan" value="{{$data['giayphep_thoihan']}}"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>8.3. Địa chỉ nơi làm việc</i></td>
							<td><input required type="" name="giayphep_lamviec" value="{{$data['giayphep_lamviec']}}"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>8.4. Địa chỉ cư chú</i></td>
							<td><input required type="" name="giayphep_cutru" value="{{$data['giayphep_cutru']}}"></td>
						</tr>
						<tr>
							<td><b>9. Hợp đồng lao động</b></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>9.1 Thời hạn lao động</i></td>
							<td><input required type="" name="hopdong_thoihan" id="hopdong_thoihan" value="{{$data['hopdong_thoihan']}}"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>9.2. Trực tiếp</i></td>
							<td><input required type="" name="hopdong_tructiep" value="{{$data['hopdong_tructiep']}}"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>9.3. Thông qua đơn vị cung cấp khóa học (Ghi rõ Tên đơn vị)</i></td>
							<td><input required type="" name="hopdong_tendonvi" value="{{$data['hopdong_tendonvi']}}"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>9.4. Số giờ phân công giảng dạy</i></td>
							<td><input required type="number" min="0" name="hopdong_sogiogiangday" value="{{$data['hopdong_sogiogiangday']}}"></td>
						</tr>
						<!-- M1d -->
						<tr>
							<td><b>10. Thông tin về trường tiếp nhận:&nbsp</b></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>10.1. Trên trường</i></td>
							<td><input required type="" name="tentruong" value="{{$data['tentruong']}}"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>10.2. Quận/Huyện</i></td>
							<td><input required type="" name="quanhuyen" value="{{$data['quanhuyen']}}"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>10.3. Số lớp</i></td>
							<td><input required type="number" min="0" name="solop" value="{{$data['solop']}}"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>10.4. Tổng số học sinh</i></td>
							<td><input required type="number" min="0" name="sohocsinh" value="{{$data['sohocsinh']}}"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>10.5. Số tiết học/tháng</i></td>
							<td><input required type="number" min="0" name="sotiethoc" value="{{$data['sotiethoc']}}"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>10.6. Tỷ lệ % GVNN</i></td>
							<td><input required type="number" min="0" name="tyle_gvnn" value="{{$data['tyle_gvnn']}}"></td>
						</tr>
						<tr>
							<td style="padding-left: 30px"><i>10.7. Cơ cấu GVNN</i></td>
							<td><input required type="" name="cocau_gvnn" value="{{$data['cocau_gvnn']}}"></td>
						</tr>
						<tr>
							<td><b>11. Ghi chú:&nbsp</b></td>
							<td><textarea rows="5" cols="50" name="ghichu">{{$data['ghichu']}}</textarea></td>
						</tr>
					</table>
				</ul>
			</div>
		</div>
	</div>
	<div id="bottom" class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4 form-group">
			<button type="submit" class="btn btn-danger">Cập nhật <span class="glyphicon glyphicon-wrench"></span></button>
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
	 $("#quoctich").val("{{$data['quoctich']}}").change();
	 if (quoctich !== 'VN' && quoctich !== '') {
	 	$('#hochieu_thongtin').css('display','');
	 	$('#hochieu_so_tr').css('display','');
	 	$('#hochieu_hansudung_tr').css('display','');
	 	$('#visa_so_tr').css('display','');

	 	$('#hochieu_so').prop('disabled','');
	 	$('#hochieu_hansudung').prop('disabled','');
	 	$('#visa_so').prop('disabled','');
	 	$('#visa_hansudung').prop('disabled','');

	 	$('#hochieu_so').prop('value','{{$data["hochieu_so"]}}');
	 	$('#hochieu_hansudung').prop('value','{{$data["hochieu_hansudung"]}}');
	 	$('#visa_so').prop('value','{{$data["visa_so"]}}');
	 	$('#visa_hansudung').prop('value','{{$data["visa_hansudung"]}}');

	 	$('#visa_hansudung_tr').css('display','');
	 	$('#visa_hansudung').datetimepicker({
	 		format : 'd/m/Y',
	 	});
	 	$('#hochieu_hansudung').datetimepicker({
	 		format : 'd/m/Y',
	 	});
	 }
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