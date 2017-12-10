@extends('layouts.app')

@section('title')
	New Invoice
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <h2 class="pg-heading" style="text-align: right;">Invoice</h1>
            <form method="POST" action="/invoice">
                @include('invoice.form')
            </form>
        </div>
    </div>
</div>
@endsection