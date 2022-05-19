@extends('layouts.app')

@push('css')
    <style>
        .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
        }

        .switch input { 
        opacity: 0;
        width: 0;
        height: 0;
        }

        .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
        }

        .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
        }

        input:checked + .slider {
        background-color: #2196F3;
        }

        input:focus + .slider {
        box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
        }
    </style>

@endpush
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><span class="btn">Create Product</span><a class="btn btn-primary float-end" href="{{route('products.index')}}">All Products</a></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('products.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="product_name" class="col-md-4 col-form-label text-md-end">{{ __('Product Name') }}</label>

                            <div class="col-md-6">
                                <input id="product_name" type="text" class="form-control @error('product_name') is-invalid @enderror" name="product_name" value="{{ old('product_name') }}">

                                @error('product_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 

                        <div class="row mb-3">
                            <label for="quantity" class="col-md-4 col-form-label text-md-end">{{ __('Product Quanatity') }}</label>

                            <div class="col-md-6">
                                <input id="quantity" type="text" class="form-control 
                                @error('quantity') is-invalid @enderror" name="quantity" value="{{ old('quantity') }}">

                                @error('quantity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 
                        
                        <div class="row mb-3">
                            <label for="" class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</label>

                            <div class="col-md-6 mt-2">
                                <div class="form-check">
                                    <input type="radio" value="Man" name="gender" class="form-check-input" id="status1">
                                    <label class="form-check-label" for="status1">Man</label>
                                </div>

                                <div class="form-check">
                                    <input type="radio" name="gender" value="Woman" class="form-check-input" id="status0">
                                    <label class="form-check-label" for="status0">Woman</label>
                                </div>

                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="color" class="col-md-4 col-form-label text-md-end">{{ __('Product Color') }}</label>

                            <div class="col-md-6">
                                <input id="color" type="text" class="form-control @error('color') is-invalid @enderror" name="color" value="{{ old('color') }}">

                                @error('color')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="size" class="col-md-4 col-form-label text-md-end">{{ __('Product Size') }}</label>

                            <div class="col-md-6">
                                <input id="size" type="text" class="form-control @error('size') is-invalid @enderror" name="size" value="{{ old('size') }}">

                                @error('size')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="price" class="col-md-4 col-form-label text-md-end">{{ __('Product Price') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}">

                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="" class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>

                            <div class="col-md-6 mt-2">
                                <div class="form-check">
                                    <input type="radio" value="1" name="status" class="form-check-input" id="status3">
                                    <label class="form-check-label" for="status3">Active</label>
                                </div>

                                <div class="form-check">
                                    <input type="radio" name="status" value="0" class="form-check-input" id="status4">
                                    <label class="form-check-label" for="status4">Inactive</label>
                                </div>

                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create Product') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

