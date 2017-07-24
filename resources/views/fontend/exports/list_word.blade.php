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
			<table class="table table-bordered">
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
							<td><a href="{{route('word.companyPreview',['id'=>$value->id])}}" class="btn btn-info">Xem thông tin về cơ sở <span class="glyphicon glyphicon-eye-open"></span></a>
							<a href="{{route('doc.show',['id'=>$value->id])}}" class="btn btn-success">Xem thông tin về nhân viên <span class="glyphicon glyphicon-eye-open"></span></a>
							<a href="{{asset('word/exports/'.$value->ten_tep)}}" download class="btn btn-warning">Tải về tệp Doc <span class="glyphicon glyphicon-export"></a>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>		
		</div>
</form>
@endsection