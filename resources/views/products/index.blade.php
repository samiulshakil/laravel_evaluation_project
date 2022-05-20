@extends('layouts.app')

@push('css')

<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
<style>
    .dataTables_length {
    padding-top: 1rem;
    padding-left: 1rem;
    }
    .dataTables_filter {
        padding-top: 1rem;
        padding-right: 1rem;
    }
    .dataTables_info {
        padding-left: 1rem;
        padding-bottom: 1rem;
    }
    .dataTables_paginate {
        padding-right: 1rem;
    }
</style>
    
@endpush

@section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div><span class="btn">All Product</span><a class="btn btn-primary float-end" href="{{route('products.create')}}">Product Create</a></div>
                                </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="main-card mb-3 card">
                                                <div class="table-responsive">
                                                    <table id="datatable2" class="align-middle mb-0 table table-borderless table-striped table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">#</th>
                                                                <th class="text-center">Product Name</th>
                                                                <th class="text-center">Quantity</th>
                                                                <th class="text-center">Gender</th>
                                                                <th class="text-center">Color</th>
                                                                <th class="text-center">Size</th>
                                                                <th class="text-center">Price</th>
                                                                <th class="text-center">Status</th>
                                                                <th class="text-center">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach ($product_infos as $key => $product_info)
                                                            <tr>
                                                                <td class="text-center text-muted">#{{ $key + 1 }}</td>
                                                                <td>{{ $product_info->product->product_name}}</td>
                                                                <td class="text-center">{{ $product_info->quantity }}</td>
                                                                <td class="text-center">{{ $product_info->gender }}</td>
                                                                <td class="text-center">{{ $product_info->color }}</td>
                                                                <td class="text-center">{{ $product_info->size }}</td>
                                                                <td class="text-center">{{ $product_info->price }}</td>
                                                                <td class="text-center">
                                                                    @if ($product_info->product->status == true)
                                                                    <span class="badge bg-primary">Active</span>
                                                                    @else
                                                                    <span class="badge bg-danger">Inactive</span>
                                                                    @endif
                                                                </td>
                                                                <td class="text-center">
                                                                    <a class="btn btn-secondary btn-sm" href="{{ route('products.variant.create',$product_info->product->id) }}">
                                                                        <span>Add Variant</span>
                                                                    </a>
                                                                    <a class="btn btn-success btn-sm" href="{{ route('products.show',$product_info->id) }}">
                                                                        <span>Show</span>
                                                                    </a>
                                                                    <a href="{{route('products.edit', $product_info->id)}}" class="btn btn-info btn-sm">
                                                                        <span>Edit</span>
                                                                    </a>
                                                                    <button type="button" class="btn btn-danger btn-sm" onclick="deleteData({{$product_info->id}})">
                                                                        <span>Delete</span>
                                                                    </button>
                                                                    <form id="delete-form-{{$product_info->id}}" method="post" action="{{ route('products.destroy', $product_info->id) }}">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                    </form>
                                                                </td>
                                                            </tr>                         
                                                        @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@push('js')
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#datatable').DataTable();
    } );
</script>
@endpush
