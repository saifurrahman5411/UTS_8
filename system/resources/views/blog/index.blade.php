@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card-header">
				 
				</div>
				<div class="card-body">
					
					
				</div>
				<div class="card mt-4">
					<div class="card-header">
						data artikel
						<a href="{{url('admin/blog/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus">  Tambah Data</i></a>
					</div>
					<div class="card-body">
						<table class="table">
							<thead>
								<th>judul</th>
								<th>isi</th>
								
							</thead>
							<tbody>
								@foreach($list_blog as $blog)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>
										<div class="btn-group">
										<a href="{{url('admin/blog', $blog->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
										<a href="{{url('admin/blog', $blog->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
										@include('template.util.delete', ['url' => url('admin/blog', $blog->id)])
										</div>
									</td>
									<td>{{$blog->judul}}</td>
									<td>{{$blog->isi}}</td>
									
								</tr>
								@endforeach
							</tbody>							
						</table>
					</div>
				</div>
			</div>
		</div>		
	</div>

@endsection