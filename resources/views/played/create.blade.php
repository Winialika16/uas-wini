@extends('layouts.app') 
@section('content') 
<div class="row justify-content-center">
    <div class="col-md-8 bg-danger">
<div class="container"> 
	<h3 align="center">Tambah Data Played</h3>
	<form action="{{ url('/played') }}" method="post"> 
		@csrf 
		<table> 
			<tr> 
			 	<td>ID Track</td> 
			  	 <td>
			  	 	<input type="text" name="play_id_track">
			  	</td>
			</tr> 
			<tr> 
			  	<td>Date</td> 
			  	 <td><input type="date" name="play_date"></td> 
			</tr> 
			<tr> 
				<td></td> 
				<td><input type="submit" value="SIMPAN"></td> 
			</tr>  
		</table>  
	</form>  
</div>  
@endsection