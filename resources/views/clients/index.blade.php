@extends('layouts.app')
@section('title')
New Client
@endsection

@section('content')
<h2 class="pg-heading">Clients <a href="{{route('clients.create')}}" class="btn btn-success">New Client</a></h2>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Company</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Phone</th>
			<th>Email</th>
			<th>Options</th>
		</tr> 
	</thead>
	<tbody> 
		@foreach ($clients as $client)
		<tr id="{{ $client->id }}"> 
			<td><a href="clients/{{ $client->id }}">{{ $client->company }}</a></td>
			<td>{{ $client->first_name }}</td>
			<td>{{ $client->last_name }}</td>
			<td>{{ $client->phone_number }}</td>
			<td>{{ $client->email }}</td>
			<td><a href="clients/{{ $client->id }}">View</a> | <a href="clients/{{ $client->id }}/edit">Edit</a> | <a class="deleteClient" href="#">Delete</a></td>
		</tr>
		@endforeach
	</tbody> 
</table>
@endsection

@push('scripts-footer')
<script type="text/javascript" src="{{ asset('js/delClient.js') }}"></script>
@endpush