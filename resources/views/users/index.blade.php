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
                <div class="card-header">{{ __('All Users') }}</div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="table-responsive">
                                    <table id="datatable" class="align-middle mb-0 table table-borderless table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-center">Name</th>
                                                <th class="text-center">Email</th>
                                                <th class="text-center">Date Of Birth</th>
                                                <th class="text-center">Country</th>
                                                <th class="text-center">City</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-center">Joined At</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $key => $user)
                                                <tr>
                                                    <td class="text-center text-muted">#{{ $key + 1 }}</td>
                                                    <td>{{ $user->name}}</td>
                                                    <td class="text-center">{{ $user->email }}</td>
                                                    <td class="text-center">{{ $user->date_of_birth }}</td>
                                                    <td class="text-center">{{ $user->country }}</td>
                                                    <td class="text-center">{{ $user->city }}</td>
                                                    <td class="text-center">
                                                        @if ($user->status == true)
                                                        <span class="badge bg-primary">Active</span>
                                                        @else
                                                        <span class="badge bg-danger">Inactive</span>
                                                        @endif
                                                    </td>
                                                    <td class="text-center">{{ $user->created_at->diffForHumans() }}</td>
                                                    <td class="text-center">
                                                        <a class="btn btn-success btn-sm" href="{{ route('users.show',$user->id) }}"><i
                                                            class="fas fa-eye"></i>
                                                            <span>Show</span>
                                                        </a>
                                                        <a href="{{route('users.edit', $user->id)}}" class="btn btn-info btn-sm">
                                                            <i class="fas fa-edit"></i>
                                                            <span>Edit</span>
                                                        </a>
                                                        <button type="button" class="btn btn-danger btn-sm" onclick="deleteData({{$user->id}})">
                                                            <i class="fas fa-trash-alt"></i>
                                                            <span>Delete</span>
                                                        </button>
                                                        <form id="delete-form-{{$user->id}}" method="post" action="{{ route('users.destroy', $user->id) }}">
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
<script type="script/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.min.js"></script>
<script type="script/javascript" src="https://cdn.jsdelivr.net/combine/npm/sweetalert2@11.4.10/dist/sweetalert2.min.js,npm/sweetalert2@11.4.14"></script>
@endpush
