@extends('layouts.app')
@section('title')
Edit {{ $client->company }}
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Edit {{ $client->company }}</div>

                <div class="panel-body">
					<form method="POST" action="/clients/{{ $client->id }}">
                        {{ method_field('put') }}
						@include('clients.form')
					</form>
				</div>
            </div>
        </div>
    </div>
</div>
@endsection