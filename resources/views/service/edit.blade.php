@extends('layouts.app')
@section('title')
Edit {{ $service->name }}
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 pull-left">
            <div class="panel panel-primary">
                <div class="panel-heading">Edit {{ $service->name }}</div>

                <div class="panel-body">
					<form method="POST" action="/service/{{ $service->id }}">
                        {{ method_field('put') }}
						@include('service.form')
					</form>
				</div>
            </div>
        </div>
    </div>
</div>
@endsection