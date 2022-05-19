@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    
                    <div class="d-flex justify-content-between">
                        <a class="btn btn-primary" href="{{route('users')}}">All Users</a>
                        <a class="btn btn-danger" href="{{route('frontend.index')}}">Frontend</a>
                        <a class="btn btn-success float-end" href="{{route('products.index')}}">All Products</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
