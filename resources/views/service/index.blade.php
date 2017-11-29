@extends('layouts.app')
@section('title')
Services
@endsection

@section('content')
	<h2 class="pg-heading">Services <a href="{{route('service.create')}}" class="btn btn-success">Add Service</a></h2>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Name</th>
				<th>List Price</th>
				<th>Sale Price</th>
				<th>Cost</th>
				<th>Last Updated</th>
				</tr> 
		</thead>
		<tbody> 
			@foreach ($services as $service)
			<tr id="{{ $service->id }}"> 
					<td>{{ $service->name }}</td>
					<td>{{ $service->list_price }}</td>
					<td>{{ $service->sale_price }}</td>
					<td>{{ $service->cost }}</td>
					<td>{{ $service->updated_at->diffForHumans() }}</td>
					<td><a href="service/{{ $service->id }}">View</a> | <a href="service/{{ $service->id }}/edit">Edit</a> | <a class="deleteService" href="#">Delete</a></td>
			</tr>
			@endforeach
		 </tbody> 
	</table>
@endsection

@push('scripts-footer')
	<script type="text/javascript" src="{{ asset('js/delService.js') }}"></script>
@endpush