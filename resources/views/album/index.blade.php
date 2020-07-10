@extends('layouts.app') 

@section('content') 
    <div class="row justify-content-center">
        <div class="col-md-8 bg-danger">
	<h3 style="text-align: center;">Daftar Album</h3> 
	<a href="{{ url('album/create') }}" class="bg-light">Tambah Data</a>
	<div>
		<div>
	<table class="table"> 
		<tr> 
			<td>Nama</td> 
			<td>ID Artist</td>
			<td>Hapus</td>
			<td>Edit</td>
		</tr>
		@foreach($rows as $row)
		<tr> 
			<td>{{ $row->album_nama }}</td> 
			<td>{{ $row->album_id_artis }}</td>
			<td><form action="{{ url('album/' . $row->album_id) }}" method="POST"> 
 				<input name="_method" type="hidden" value="DELETE"> 
 				@csrf 
 					<button>Hapus</button> 
				</form></td>
			<td><a href="{{ url('album/' . $row->album_id . '/edit') }}"><button>Edit</button></a></td>
		</tr>
	@endforeach 
</table> 
</div> 
</div>
 @endsection