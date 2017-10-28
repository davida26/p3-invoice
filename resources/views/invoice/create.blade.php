@extends('layouts.app')

@section('title')
	Create Charge
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Charge Response</div>

                <div class="panel-body">
                    <?php dump($charge); ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection