@extends('layouts.app') 

@section('content') 
<div class="row justify-content-center">
    <div class="col-md-8 bg-success">
<div class="container">
	<h3>Daftar Played</h3>
	<a href="{{ url('played/create') }}" class="bg-warning">Tambah Data</a> 
	<table class="table"> 
		<tr> 
			<td>ID Track</td> 
			<td>Date</td>
			<td>Hapus</td>
			<td>Edit</td>
		</tr>
		@foreach($rows as $row)
		<tr> 
			<td>{{ $row->play_id_track }}</td> 
			<td>{{ $row->play_date }}</td>
			<td><form action="{{ url('played/' . $row->play_id) }}" method="POST"> 
 						<input name="_method" type="hidden" value="DELETE"> 
 						@csrf 
 						<button>Hapus</button> 
				</form>
			</td>
			<td><a href="{{ url('played/' . $row->play_id . '/edit') }}"><button>Edit</button></a></td>
		</tr>
	@endforeach 
</table> 
</div> 
 @endsection