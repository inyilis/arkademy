@extends('adminlte.master')

@section('content')
<div class="mr-3 ml-3 mt-3">
	<div class="card card-primary">
		<div class="card-header">
			<h1 class="card-title">Data Items</h1>
		</div>
		<div class="card-body">
			<a href="/items/create" class="btn btn-primary mb-2 mt-2">Create New Item</a>
			<table class="table">
			    <thead>
			      <tr>
			        <th style="width: 10px">No</th>
			        <th style="width: 200px">Name</th>
			        <th style="width: 450px">Description</th>
			        <th style="width: 40px">Stock</th>
			        <th style="width: 40px">Price</th>
			        <th>Actions</th>
			      </tr>
			    </thead>
			    <tbody>
			    	@foreach($items as $key => $item)
			    		<tr>
			    			<td>{{$key+1}}</td>
			    			<td>{{$item->name}}</td>
			    			<td>{{$item->description}}</td>
			    			<td>{{$item->stock}}</td>
			    			<td>{{$item->price}}</td>
			    			<td>
			    				<a href="/items/{{$item->id}}" class="btn btn-sm btn-info"> Show</a>
			    				<a href="/items/{{$item->id}}/edit" class="btn btn-sm btn-default"> Edit</a>
			    				<form action="/items/{{$item->id}}" method="POST" style="display: inline">
			    					@csrf
			    					@method('DELETE')
			    					<button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
			    				</form>
			    			</td>
			    		</tr>
			    	@endforeach
			    </tbody>
			</table>
		</div>
	</div>
</div>
@endsection