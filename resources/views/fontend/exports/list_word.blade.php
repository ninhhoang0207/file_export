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
<form method="POST">
	{{csrf_field()}}
	<div id="body">
		<h3 align="center "><b>DANH SÁCH THÔNG TIN VỀ CÁC CƠ SỞ ĐÀO TẠO</b></h3>
		<hr>
		<div>
			<table class="table table-bordered" >
				<thead>
					<th>STT</th>
					<th>Trung tâm</th>
					<th>Số</th>
					<th>BC</th>
					<th>Chức năng</th>
				</thead>
				<tbody align="center">
					<?php foreach ($data as $key => $value): ?>
						<tr>
							<td>{{$key+1}}</td>
							<td>{{$value->trungtam}}</td>
							<td>{{$value->so}}</td>
							<td>{{$value->bc}}</td>
							<td><a href="{{route('word.companyPreview',['id'=>$value->id])}}" class="btn btn-info">Xem chi tiết <span class="glyphicon glyphicon-eye-open"></span></a>
							<a href="{{asset('word/exports/'.$value->ten_tep)}}" download class="btn btn-warning">Tải về tệp Doc <span class="glyphicon glyphicon-export"></a>
							<a href="{{route('excel.list',['id'=>$value->id])}}" class="btn btn-success">Danh sách nhân viên <span class="glyphicon glyphicon-list"></span></a>
							<a href="{{route('excel.export',['company_id'=>$value->id])}}" class="btn btn-warning">Tải về tệp Excel <span class="glyphicon glyphicon-export"></a>
							<a href="{{route('excel.index',['company_id'=>$value->id])}}" class="btn btn-danger">Thêm nhân viên <span class="glyphicon glyphicon-plus"></a>
							<a onclick="$('#modal-delete a').attr('href','{{route('doc.delete',['id'=>$value->id])}}')" data-toggle="modal" data-target="#modal-delete" class="btn btn-default">Xóa <span class="glyphicon glyphicon-remove"></span></a>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>		
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
				<p><b>Bạn có chắc chắn muốn xóa đối tượng này?</b></p>
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