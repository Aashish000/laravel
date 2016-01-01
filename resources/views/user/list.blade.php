@extends('layouts.master')

@section('content')

<table class="table table-bordered table-striped table-hover">
	<tr>
		<th> Name </th>
		<th> UserName </th>
		<th> Is Admin </th>
		<th> Status </th>
	 </tr>

	 @foreach($users as $user)
	
	<tr>
		<td> {{ $user->name}} </td>
		<td> {{ $user->username}} </td>
		<td> {{ $user->is_admin}} </td>
		<td> <a href="edit.blade.php" class="btn btn-success btn-sm" >  
		 edit </a> 
		<a href="delete.blade.php" class="btn btn-danger btn-sm" > 
		 delete </a> 
		</td>
		
	</tr>

	@endforeach
</table>






@stop