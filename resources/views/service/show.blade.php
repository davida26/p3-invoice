@extends('layouts.app')
@section('title')
Service
@endsection

@section('content')
<div class="row">
        <div class="col-md-5">
            <div class="panel panel-default">
                <div class="panel-heading"> {{ $service->name }}</div>
                <div class="panel-body">
                	<p>List Price: {{ $service->list_price }}</p>
                	<p>Sale Price: {{ $service->sale_price }}</p>
                	<p>Cost: {{ $service->cost }}</p>
                	<p>Description: {{ $service->description }}</p>
                	<a href="/service/{{ $service->id }}/edit" class="btn btn-primary">Edit</a>
                    <a href="/service" class="btn btn-default">View All</a>
                </div>
            </div>
        </div>
    </div>
@endsection