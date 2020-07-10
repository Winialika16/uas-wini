@extends('layouts.app') 
@section('content') 
<div class="row justify-content-center">
   <div class="col-md-8 bg-danger">
<div class="container"> 
	<h3 align="center">Tambah Data Artist</h3>
	<form action="{{ url('/artist') }}" method="post"> 
		@csrf
		<table> 
			<tr> 
			 	<td>Nama</td> 
			 	<td><input type="text" name="artis_nama"></td> 
			</tr> 
			<tr> 
				<td></td> 
				<td><input type="submit" value="SIMPAN"></td> 
			</tr>  
		</table>  
	</form>  
</div>  
@endsection