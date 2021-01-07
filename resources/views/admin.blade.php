@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admins</div>

                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Status</th>
                            <th scope="col">Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($admins as $admin)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$admin->name}}</td>
                                    <td>{{$admin->email}}</td>
                                    @if($admin->status == 0)
                                        <td>Inactive</td>
                                    @elseif($admin->status == 1)
                                        <td>Active</td>
                                    @else
                                        <td>Blocked</td>
                                    @endif
                                    
                                    <td>{{$admin->role}}</td>
                                </tr>
                            @empty 
                                <tr>
                                    <td colspan="4">No Records Found</td> 
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection