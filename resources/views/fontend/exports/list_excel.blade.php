@extends('templates.master')
@section('title')
Export Excel
@endsection
@section('header')
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
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
<form method="POST">
	{{csrf_field()}}
	<div id="body">
		<h3 align="center "><b>DANH SÁCH THÔNG TIN NHÂN VIÊN</b></h3>
		<h4 align="center "><b>TRUNG TÂM: {{$company['trungtam']}}</b></h4>
		<h5 align="center "><b><i>{{'Số: '.$company['so'].' / BC:'.$company['bc']}}</i></b></h5>
		<p align="center "><i>{{'Hà Nội, ngày '.$company['ngay'].' tháng '.$company['thang'].' nam '.$company['nam']}}</i></p>
		<hr>
		<div>
			<table class="table table-bordered" id="tbl_list">
				<thead>
					<th>STT</th>
					<th>Họ tên</th>
					<th>Giới tính</th>
					<th>Chức vụ</th>
					<th>Trình độ</th>
					<th>Quốc tịch</th>
					<th></th>
				</thead>
				<tbody align="center">
					<?php foreach ($data as $key => $value): ?>
						<tr>
							<td>{{$key+1}}</td>
							<td>{{$value->hoten}}</td>
							<td>{{$gioitinh[$value->gioitinh]}}</td>
							<td>{{$chucvu[$value->chucvu]}}</td>
							<td>{{$trinhdo[$value->trinhdo]}}</td>
							<td>{{$quoctich[$value->quoctich]['name']}}</td>
							<td><a href="{{route('excel.preview',['id'=>$value->id])}}" class="btn btn-success">Xem chi tiết <span class="glyphicon glyphicon-eye-open"></span></a>
							<a href="{{route('excel.edit',['id'=>$value->id])}}" class="btn btn-warning">Chỉnh sửa <span class="glyphicon glyphicon-pencil"></a>
							<a onclick="$('#modal-delete a').attr('href','{{route('excel.delete',['id'=>$value->id])}}')" data-toggle="modal" data-target="#modal-delete" class="btn btn-danger">Xóa <span class="glyphicon glyphicon-remove"></span></a>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
			<div>
				<a href="{{route('home')}}" class="btn btn-default">Quay lại <span class="glyphicon glyphicon-arrow-left"></a>
				<a href="{{route('excel.index',['company_id'=>$company_id])}}" class="btn btn-danger">Thêm nhân viên <span class="glyphicon glyphicon-plus"></a>
				<a href="{{route('excel.export',['company_id'=>$company_id])}}" class="btn btn-warning">Tải về tệp Excel <span class="glyphicon glyphicon-export"></a>
			</div>		
		</div>
</form>
<!-- Modal -->
<div id="modal-delete" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><strong>Xóa đối tượng</strong></h4>
			</div>
			<div class="modal-body">
				<p><b>Bạn có chắc chắn muốn xóa đối tượng này</b></p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
				<a href="{{route('excel.delete')}}" class="btn btn-danger">Xóa?</a>
			</div>
		</div>
	</div>
</div>
@endsection

@push('scripts')
<script type="text/javascript" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
	$('#tbl_list').DataTable();
</script>
@endpush