@extends('layouts.app')
@section('title')
New Client
@endsection

@section('content')
<div class="container">
	<div class="row">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Company</th>
					<th>Phone</th>
					<th>Email</th>
					</tr> 
			</thead>
			<tbody> 
				@foreach ($clients as $client)
				<tr> 
					<th scope="row">{{ $client->id }}</th>
						<td>{{ $client->first_name }}</td>
						<td>{{ $client->last_name }}</td>
						<td>{{ $client->company }}</td>
						<td>{{ $client->phone_number }}</td>
						<td>{{ $client->email }}</td>
				</tr>
				@endforeach
			 </tbody> 
		</table>
	</div>
</div>
@endsection