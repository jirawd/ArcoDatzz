@extends('layouts.base')
@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h1>Sign Up</h1>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <form class="" action="{{ url('customer') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="Name"> First Name: </label>
                    <input type="text" name="fname" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Name"> Last Name: </label>
                    <input type="text" name="lname" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="addressline" id="address" class="form-control">
                </div>
                <div class="form-group">
                    <label for="zipcode">Zipcode</label>
                    <input type="text" name="zipcode" id="zipcode" class="form-control">
                </div>
                <div class="form-group">
                    <label for="phone">phone</label>
                    <input type="text" name="phone" id="address" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password: </label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                    <input type="submit" value="Sign Up" class="btn btn-primary">
             </form>
        </div>
    </div>
@endsection
