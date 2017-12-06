@extends('layouts.app')
@section('title')
Edit Company Settings
@endsection

@section('content')
<div class="container-fluid">
    <h2 class="pg-heading">Company Settings</h2>
    <div class="row">
        <div class="col-md-6">
			<form method="POST" action="/settings/1">
                {{ method_field('put') }}
				@include('config.form')
			</form>
        </div>
    </div>
</div>
@endsection