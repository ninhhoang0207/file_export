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
		<h3 align="center"><b>Mẫu M1a</b></h3>
		<hr>
	</div>
	<div id="body">
		<h3 align="center "><b>DANH SÁCH CÁC TỆP</b></h3>
		<hr>
		<div>
			<table class="table table-bordered">
				<thead>
			<!-- 		<th>STT</th>
					<th>Tên Trung Tâm</th>
					<th>Ngày tạo</th>
					<th>Chức năng</th> -->
					<th>Loại tệp</th>
					<th>Xem</th>
					<th>Tải về</th>
					<th>Export</th>
				</thead>
				<tbody>
					<tr>
						<td>M1a</td>
						<td><a href="{{asset('excel/exports/m1_excel.xls')}}" class="btn btn-success">Tải về<span class="glyphicon glyphicon-download-alt"></span></a></td>
						<td><a href="" class="btn btn-info">Xem <span class="glyphicon glyphicon-eye-open"></span></a>
						</td>
						<td><a href="{{route('excel.exportA')}}" class="btn btn-warning">Export <span class="glyphicon glyphicon-export"></span></a></td>
					</tr>
					<tr>
						<td>M1b</td>
						<td><a href="{{asset('excel/exports/m1b_excel.xls')}}" class="btn btn-success">Tải về<span class="glyphicon glyphicon-download-alt"></span></a></td>
						<td><a href="" class="btn btn-info">Xem <span class="glyphicon glyphicon-eye-open"></span></a>
						</td>
						<td><a href="{{route('excel.exportB')}}" class="btn btn-warning">Export <span class="glyphicon glyphicon-export"></span></a></td>
					</tr>
					<tr>
						<td>M1c</td>
						<td><a href="{{asset('excel/exports/m1c_excel.xls')}}" class="btn btn-success">Tải về<span class="glyphicon glyphicon-download-alt"></span></a></td>
						<td><a href="" class="btn btn-info">Xem <span class="glyphicon glyphicon-eye-open"></span></a>
						</td>
						<td><a href="{{route('excel.exportC')}}" class="btn btn-warning">Export <span class="glyphicon glyphicon-export"></span></a></td>
					</tr>
				</tbody>
			</table>		
		</div>
</form>
@endsection