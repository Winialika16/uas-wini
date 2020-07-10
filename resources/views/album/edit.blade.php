@extends('layouts.app') 
@section('content') 
<div class="container"> 
	<h3>Edit Data Album</h3>
	<form action="{{ url('/album/'.$row->album_id) }}" method="post"> 
		<input name="_method" type="hidden" value="PATCH">
		@csrf 
		<table> 
			<tr> 
			 	<td>Nama</td> 
			 	<td><input type="text" name="album_nama" value="{{$row->album_nama }}"></td> 
			</tr> 
			<tr> 
			  	<td>ID Artist</td> 
			  	 <td><input type="text" name="album_id_artis" value="{{$row->album_id_artis }}"></td> 
			</tr> 
			<tr> 
				<td></td> 
				<td><input type="submit" value="UPDATE"></td> 
			</tr>  
		</table>  
	</form>  
</div>  
@endsection