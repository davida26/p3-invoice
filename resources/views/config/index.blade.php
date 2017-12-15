@extends('layouts.app')
@section('title')
Settings
@endsection

@section('content')
<h2 class="pg-heading">Company Settings</h2>
<p>Settings here are used within the application and invoices to customers.</p>
<div class="row">
    <div class="col-md-8">
    	<table class="table">
    		<tbody>
    					<tr>
							<th scope="row">Company Name</th>
	    					<td>{{ $settings->name }}</td>
    					</tr>
    					<tr>
	    					<th scope="row">Phone Number</th>
	    					<td>{{ $settings->phone }}</td>
    					</tr>
    					<tr>
	    					<th scope="row">Address</th>
	    					<td>{{ $settings->address }}</td>
    					</tr>
						<tr>
	    					<th scope="row">Billing Email</th>
	    					<td>{{ $settings->billing_email }}</td>
    					</tr>
    					<tr>
	    					<th scope="row">Tech Support Email</th>
	    					<td>{{ $settings->support_email }}</td>
    					</tr>
    					<tr>
	    					<th scope="row">TAX ID</th>
	    					<td>{{ $settings->tax_id }}</td>
    					</tr>
    					<tr>
	    					<th scope="row">Company Logo</th>
	    					<td><a href="{{ $settings->logo }}" target="_blank">{{ $settings->logo }}</a></td>
    					</tr>
                        <tr>
                            <th scope="row">Website</th>
                            <td>{{ $settings->website }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Show TAX ID on Invoices?</th>
                            <td>@if($settings->show_tax_id) Yes @else No  @endif</td>
                        </tr>
    		</tbody>
    	</table>
    	<a href="/settings/1/edit" class="btn btn-primary">Edit Settings</a>
	</div>
</div>
@endsection