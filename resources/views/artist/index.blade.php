@extends('layouts.app') 

@section('content') 

<div class="row justify-content-center">
    <div class="col-md-8 bg-danger">
	<h3 align="center">Daftar Artis</h3>
    <a href="{{ url('artist/create') }}" class="bg-light">Tambah Data</a>
	<table class="table"> 
		<tr> 
			<td>Nama</td> 
			<td>Hapus</td>
			<td>Edit</td>
		</tr>
		@foreach($rows as $row)
		<tr>
			<td>{{ $row->artis_nama }}</td>
			<td><form action="{{ url('artist/' . $row->artis_id) }}" method="POST"> 
 		<input name="_method" type="hidden" value="DELETE"> 
 	@csrf 
 	<button>Hapus</button> 
</form></td>
<td><a href="{{ url('artist/' . $row->artis_id . '/edit') }}"><button>Edit</button></a></td> 
		</tr>
	@endforeach 
</table> 
</div> 
</div>
 @endsection