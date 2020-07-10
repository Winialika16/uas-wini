@extends('layouts.app') 
@section('content') 
<div class="row justify-content-center">
    <div class="col-md-8 bg-danger">
<div class="container"> 
	<h3 align="center">Edit Data Track</h3>
	<form action="{{ url('/track') }}" method="post"> 
		@csrf 
		<table> 
			<tr> 
			 	<td>Nama</td> 
			 	<td><input type="text" name="track_nama"></td> 
			</tr> 
			<tr> 
			 	<td>ID Album</td> 
			 	<td><input type="text" name="track_id_album"></td> 
			</tr>
			<tr> 
			 	<td>Time</td> 
			 	<td><input type="text" name="track_time"></td> 
			</tr>
			<tr>
			<td>@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif
 
				<form action="{{ url('/track/upload') }}" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
 
					<div class="form-group">
						<b>File </b><br/>
						<input type="file" name="track_file">
					</div>
			</form>
		</td>
			</tr>
			<tr> 
				<td></td> 
				<td><input type="submit" value="SIMPAN"></td> 
			</tr>  
		</table>  
	</form>  
</div>  
@endsection