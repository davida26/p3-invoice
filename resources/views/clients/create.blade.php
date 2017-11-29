@extends('layouts.app')
@section('title')
New Client
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">Add New Client</div>

                <div class="panel-body">
                    <form method="POST" action="/clients">
                        @include('clients.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
