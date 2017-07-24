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
	<div id="header" class="form-group">
		<h3 align="center"><b>Mẫu M1</b></h3>
		<hr>
	</div>
	<div id="body">
		<h3 align="center "><b>Export tệp thành công</b></h3>
		<hr>
		<div>
			<table class="table table-bordered">
				<thead>
					<th>Loại tệp</th>
					<th>Xem</th>
					<th>Tải về</th>
					<th></th>
				</thead>
				<tbody>
					<tr align="center">
						<td>M1</td>
						<td><a href="{{route('doc.show')}}" class="btn btn-info">Xem <span class="glyphicon glyphicon-eye-open"></span></a>
						</td>
						<td><a href="{{asset('word/exports/m1.docx')}}" class="btn btn-success">Tải về<span class="glyphicon glyphicon-download-alt"></span></a></td>
						<td><a href="{{route('home')}}" class="btn btn-warning">Quay lại trang chủ <span class="glyphicon glyphicon-arrow-left"></span></a></td>
					</tr>
				</tbody>
			</table>		
		</div>
</form>
@endsection