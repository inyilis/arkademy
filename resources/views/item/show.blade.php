@extends('adminlte.master')

@section('content')
<div class="card card-primary mr-3 ml-3 mt-3">
  <div class="card-header card-title">
    Detail Item
  </div>
  <div class="card-body">
  	<table class="table">
	  <tbody>
	    <tr>
	      <th style="width: 130px" scope="row">Item's Name</th>
	      <td>{{$item->name}}</td>
	    </tr>
	    <tr>
	      <th scope="row">Description</th>
	      <td>{{$item->description}}</td>
	    </tr>
	    <tr>
	      <th scope="row">Price</th>
	      <td>{{$item->price}}</td>
	    </tr>
	    <tr>
	      <th scope="row">Stock</th>
	      <td>{{$item->stock}}</td>
	    </tr>
	  </tbody>
	</table>
	<div class="pt-3">
		<a href="/items" class="btn btn-primary">Kembali</a>
	</div>
  </div>
</div>
@endsection