@extends('layouts.master')

@section('content')


<form action="{{ route( 'saveProduct' ) }}" method="post" >
	<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
			<div class="row">
				
				<div class="form-group">
					<label>
						Name
					</label>
					<input type="text" class="form-control" name="name">
					<span> {{$errors->first('name')}}   </span>
				</div>
				<div class="form-group">
					<label>
						Description
					</label>
					<textarea type="text" class="form-control" name="description"></textarea>
					<span> {{$errors->first('description')}}   </span>
				</div>
				<div class="form-group">
					<label>
						Price
					</label>
					<input type="text" class="form-control" name="price">
					<span> {{$errors->first('price')}} </span>
				</div>	
	
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