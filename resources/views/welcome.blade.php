@extends('layouts.app')

@section('title')
    Invoice Generator
@endsection

@section('content')
    <div class="flex-center position-ref full-height">
           <div class="content">
                <div class="title">
                    <h1 class="red">P3 - InvoiceMe App</h1>
                </div>

                <div class="links m-b-md">
                    <a href="/login">Login Form</a>
                    <a href="/invoice">Invoice Index</a>
                    <a href="/invoice/create">Stripe API - Create Charge</a>
                </div>
                <p class="text-center">Under Construction</p>
            </div>
        </div>
@endsection
