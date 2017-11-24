@extends('layouts.app')
@section('title')
Services
@endsection

@section('content')
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Name</th>
				<th>Description</th>
				<th>Price</th>
				<th>Options</th>
				</tr> 
		</thead>
		<tbody> 
			{{-- @foreach ($clients as $client)
			<tr id="{{ $client->id }}"> 
					<td>{{ $client->first_name }}</td>
					<td>{{ $client->last_name }}</td>
					<td>{{ $client->company }}</td>
					<td>{{ $client->phone_number }}</td>
					<td>{{ $client->email }}</td>
					<td><a href="clients/{{ $client->id }}">View</a> | <a href="clients/{{ $client->id }}/edit">Edit</a> | <a class="deleteClient" href="#">Delete</a></td>
			</tr>
			@endforeach --}}
		 </tbody> 
	</table>
@endsection

@push('scripts-footer')
	<script type="text/javascript" src="{{ asset('js/ajaxDelete.js') }}"></script>
@endpush