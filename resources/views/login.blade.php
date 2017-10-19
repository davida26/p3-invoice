@extends('layouts.master')

@section('title')
    Login
@endsection

@section('content')
    <div class="col-md-4 col-md-offset-4">
        <h1>Login</h1>
        <hr>
        <form role="form">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="pwd">Password</label>
                <input type="password" class="form-control" id="pwd">
            </div>
            <div class="checkbox">
                <label><input type="checkbox"> Remember me</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection