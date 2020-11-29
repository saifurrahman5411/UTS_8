@extends('artikeltemplate.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card mt-4">
					<div class="card-header">
						{{$blog->judul}}
					</div>
					<div class="card-body">
						
						<p>
						
							{{$blog->isi}}
							
						</p>
						
						<form>
							Komentar
						  <div class="form-group">
						    <label for="exampleFormControlInput1">Email</label>
						    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
						  </div>
						  <div class="form-group">
						    <label for="exampleFormControlTextarea1">komentar</label>
						    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
						  </div>
						  <button type="submit" class="btn btn-primary">kirim komentar</button>
						</form>
					</div>
				</div>
			</div>
		</div>		
	</div>

@endsection