@extends('layouts.app') 

@section('content') 
<div class="row justify-content-center">
    <div class="col-md-8 bg-danger">
<div class="container">
	<h3 align="center">Daftar Track</h3>
	<a href="{{ url('track/create') }}" class="bg-danger">Tambah Data</a> 
	<table class="table"> 
		<tr> 
			<td>Nama</td> 
			<td>ID Album</td>
			<td>Time</td>
			<td>File</td>
			<td>Hapus</td>
			<td>Edit</td>
		</tr>
		@foreach($rows as $row)
		<tr> 
			<td>{{ $row->track_nama }}</td> 
			<td>{{ $row->track_id_album }}</td>
			<td>{{ $row->track_time }}</td> 
			<td>
				<?php if (!empty($row['track_file'])) { ?>
					<audio controls>
						<source src="<?php echo "./resources/views/layouts/uploads/" . $row['track_file']; ?>" type="audio/mpeg">
							Your browser does not support the audio element.
						</audio>					
					<?php } ?>
			</td>
			<td><form action="{{ url('track/' . $row->track_id) }}" method="POST"> 
 					<input name="_method" type="hidden" value="DELETE"> 
 					@csrf 
 					<button>Hapus</button> 
				</form>
			</td>
			<td><a href="{{ url('track/' . $row->track_id . '/edit') }}"><button>Edit</button></a></td>
		</tr>
	@endforeach 
</table> 
</div>
</div> 
 @endsection