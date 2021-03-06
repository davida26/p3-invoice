@extends('layouts.app')
@section('title')
New Service
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">Add New Service</div>
                <div class="panel-body">
                    <form method="POST" action="/service">
                        @include('service.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
