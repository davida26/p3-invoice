@extends('layouts.app')
@section('title')
Edit Client
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Add New Client</div>

                <div class="panel-body">
					<form method="PUT" action="/clients">
						@include('clients.form')
					</form>
				</div>
            </div>
        </div>
    </div>
</div>
@endsection