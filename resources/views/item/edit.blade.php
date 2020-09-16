@extends('adminlte.master')

@section('content')
<div class="mr-3 ml-3 mt-3">
	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">Edit Item</h3>
		</div>
		<form action="/items/{{$item->id}}" method="POST">
			@csrf
			@method('PUT')
			<div class="card-body">
			  <div class="form-group">
			    <label for="name">Name : </label>
			    <input type="text" class="form-control" name="name" value="{{$item->name}}">
			  </div>
			  <div class="form-group">
			    <label for="description">Description : </label>
			    <input type="text" class="form-control" name="description" value="{{$item->description}}">
			  </div>
			  <div class="form-group">
			    <label for="stock">Stock : </label>
			    <input type="number" class="form-control" name="stock" value="{{$item->stock}}">
			  </div>
			  <div class="form-group">
			    <label for="price">Price : </label>
			    <input type="number" class="form-control" name="price" value="{{$item->price}}">
			  </div>
			  <a href="/items" class="btn btn-primary">Kembali</a>
			  <button type="submit" class="btn btn-primary">Update</button>
		  </div>
		</form>
	</div>
</div>
@endsection