@extends('layouts.app') 
@section('content') 
    <div class="row justify-content-center">
        <div class="col-md-8 bg-success">
<div class="container"> 
	<h3 align="center">Tambah Data Album</h3>
	<form action="{{ url('/album') }}" method="post"> 
		@csrf 
		<table> 
			<tr> 
			 	<td>Nama</td> 
			 	<td><input type="text" name="album_nama"></td> 
			</tr> 
			<tr> 
			  	<td>ID Artist</td> 
			 	<td><input type="text" name="album_id_artis"></td>  
			</tr> 
			<tr> 
				<td></td> 
				<td><input type="submit" value="SIMPAN"></td> 
			</tr>  
		</table>  
	</form>  
</div>  
@endsection