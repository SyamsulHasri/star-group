@extends('layouts.admin')

@php
    $breadcrumbs = [
        ['label' => 'Dashboard', 'url' => route('dashboard')],
        ['label' => 'User Management', 'url' => route('users.index')],
    ];
@endphp

@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-lg-10">

            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="fw-bold text-dark mb-0">
                    <i class="bi bi-shield-check me-2 text-success"></i>User Management
                </h3>
                <a href="{{ url()->previous() }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left"></i> Back
                </a>
            </div>

                        <!-- Data Table -->
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-header bg-dark text-white rounded-top-4">
                    <h5 class="mb-0"><i class="bi bi-list-check me-2"></i>Admin Users</h5>
                </div>
                <div class="card-body bg-light p-4">
                    @if(count($datas) > 0)
                        <div class="table-responsive">
                            <table class="table align-middle table-hover table-striped mb-0">
                                <thead class="table-dark">
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th class="text-center">Created At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($datas as $key => $user)
                                        <tr>
                                            <td class="text-center fw-bold">{{ $key + 1 }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td></i>{{ $user->email }}</td>
                                            <td class="text-center">
                                                <span class="badge bg-primary">{{ $user->created_at }}</span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="alert alert-info text-center mt-3">
                            <i class="bi bi-info-circle me-2"></i>No consent data found.
                        </div>
                    @endif
                </div>
            </div>

        </div>
    </div>
</div>

@endsection

