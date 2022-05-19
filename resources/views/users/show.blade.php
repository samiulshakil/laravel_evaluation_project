@extends('layouts.app')

@push('css')
    
@endpush

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><a href="{{route('users')}}" class="btn btn-primary">All Users</a></div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="table-responsive">
                                    <table id="datatable" class="align-middle mb-0 table table-borderless table-striped table-hover">
                                        <tbody>
                                            <tr>
                                                <th class="text-center">Name</th>
                                                <td class="text-center">{{ $user->name}}</td>
                                            </tr>
                                            <tr>
                                                <th class="text-center">Email</th>
                                                <td class="text-center">{{ $user->email }}</td>
                                            </tr>
                                            <tr>
                                                <th class="text-center">Date Of Birth</th>
                                                <td class="text-center">{{ $user->date_of_birth }}</td>
                                            </tr>
                                            <tr>
                                                <th class="text-center">Country</th>                                  
                                                <td class="text-center">{{ $user->country }}</td>
                                            </tr>
                                            <tr>
                                                <th class="text-center">City</th>
                                                <td class="text-center">{{ $user->city }}</td>
                                            </tr>
                                            <tr>
                                                <th class="text-center">Status</th>
                                                <td class="text-center">
                                                    @if ($user->status == true)
                                                    <span class="badge bg-primary">Active</span>
                                                    @else
                                                    <span class="badge bg-danger">Inactive</span>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="text-center">Joined At</th>
                                                <td class="text-center">{{ $user->created_at->diffForHumans() }}</td>
                                            </tr>      
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

@endpush
