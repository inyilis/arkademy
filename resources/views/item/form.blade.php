@extends('adminlte.master')

@section('content')
<div class="mr-3 ml-3 mt-3">
	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">New Item</h3>
		</div>
		<form action="/items" method="POST">
			@csrf
			<div class="card-body">
			  <div class="form-group">
			    <label for="name">Name : </label>
			    <input type="text" class="form-control" placeholder="Enter name" name="name">
			  </div>
			  <div class="form-group">
			    <label for="description">Description : </label>
			    <input type="text" class="form-control" placeholder="Enter description" name="description">
			  </div>
			  <div class="form-group">
			    <label for="stock">Stock : </label>
			    <input type="number" class="form-control" placeholder="Enter stock" name="stock">
			  </div>
			  <div class="form-group">
			    <label for="price">Price : </label>
			    <input type="number" class="form-control" placeholder="Enter price" name="price">
			  </div>
			  <a href="/items" class="btn btn-primary">Kembali</a>
			  <button type="submit" class="btn btn-primary">Tambah</button>
		  </div>
		</form>
	</div>
</div>
@endsection