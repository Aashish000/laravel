@extends('layouts.master')

@section('content')

<form action="{{ route( 'saveUser' ) }}" method="post" >
	<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
			<div class="row">
				
				<div class="form-group">
					<label>
						Name
					</label>
					<input type="text" class="form-control" name="name">
					<span> {{$errors->first('name')}} </span>
				</div>
				<div class="form-group">
					<label>
						User Name
					</label>
					<input type="text" class="form-control" name="username">
					<span> {{$errors->first('username')}} </span>
				</div>
				<div class="form-group">
					<label>
						Password
					</label>

					<input type="password" class="form-control" name="password">
					<span> {{$errors->first('password')}} </span>
				</div>	
				<span><input type="checkbox"></span> 
				<div class="form-group">
					<label>
						&nbsp;
					</label>
					<button type="submit" class="btn btn-primary">
						Save
					</button>
				</div>		
			</div>
</form>
@stop