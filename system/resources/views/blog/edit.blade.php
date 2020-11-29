@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card mt-4">
					<div class="card-header">
						Tambah Data Produk
						<form action="{{url('admin/blog', $blog->id)}}" method="post">
							@csrf
							@method('put')
					</div>
					<div class="card-body">
					<div class="form-group">
						<label class="control-label" for="">judul</label>
						<input type="text" name="judul" class="form-control" value="{{$blog->judul}}">
					</div>
					<div class="row no-gutters">
					<div class="col-md-6">
						<div class="form-group">
						<label class="control-label" for="">isi</label>
						<input type="text" name="isi" class="form-control" value="{{$blog->isi}}">
					</div>
					</div>
					
					<button class="btn btn-dark float-right"><i class="fa fa-save"> simpan</i></button>
					</form>
					</div>
				</div>
			</div>
		</div>		
	</div>

@endsection