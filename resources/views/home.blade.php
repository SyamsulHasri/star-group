@extends('layouts.admin')

@php
    $breadcrumbs = [
        ['label' => 'Dashboard', 'url' => route('dashboard')],
    ];
@endphp

@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-lg-10">

            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="fw-bold text-dark mb-0">
                    <i class="bi bi-shield-check me-2 text-success"></i>User Consent Dashboard
                </h3>
                <a href="{{ url()->previous() }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left"></i> Back
                </a>
            </div>

            <!-- Summary Cards -->
            <div class="row g-3 mb-4">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm rounded-4 bg-primary text-white text-center">
                        <div class="card-body py-3">
                            <i class="bi bi-people-fill fs-2 mb-2"></i>
                            <h6>Total Consents</h6>
                            <h4 class="fw-bold mb-0">{{ $datas->count() }}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm rounded-4 bg-success text-white text-center">
                        <div class="card-body py-3">
                            <i class="bi bi-calendar-check fs-2 mb-2"></i>
                            <h6>Today’s Consents</h6>
                            <h4 class="fw-bold mb-0">{{ $datas->where('accepted_at', '>=', now()->startOfDay())->count() }}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm rounded-4 bg-warning text-dark text-center">
                        <div class="card-body py-3">
                            <i class="bi bi-tags-fill fs-2 mb-2"></i>
                            <h6>Unique Versions</h6>
                            <h4 class="fw-bold mb-0">{{ $datas->unique('version')->count() }}</h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Filter Form -->
            <div class="card mb-4 border-0 shadow-sm rounded-4">
                <div class="card-body">
                    <form method="GET" action="{{ route('dashboard') }}" class="row g-3 align-items-end">
                        <div class="col-md-4">
                            <label for="start_date" class="form-label fw-semibold">Start Date</label>
                            <input type="date" name="start_date" id="start_date" class="form-control" value="{{ request('start_date') }}">
                        </div>
                        <div class="col-md-4">
                            <label for="end_date" class="form-label fw-semibold">End Date</label>
                            <input type="date" name="end_date" id="end_date" class="form-control" value="{{ request('end_date') }}">
                        </div>
                        <div class="col-md-4 d-flex gap-2">
                            <button type="submit" class="btn btn-dark flex-fill"><i class="bi bi-funnel-fill me-1"></i> Filter</button>
                            <a href="{{ route('dashboard') }}" class="btn btn-outline-secondary flex-fill">Reset</a>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Data Table -->
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-header bg-dark text-white rounded-top-4">
                    <h5 class="mb-0"><i class="bi bi-list-check me-2"></i>Consent Records</h5>
                </div>
                <div class="card-body bg-light p-4">
                    @if(count($datas) > 0)
                        <div class="table-responsive">
                            <table class="table align-middle table-hover table-striped mb-0">
                                <thead class="table-dark">
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>GUID</th>
                                        <th>Accepted Date</th>
                                        <th class="text-center">Version</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($datas as $key => $user)
                                        <tr>
                                            <td class="text-center fw-bold">{{ $key + 1 }}</td>
                                            <td><i class="bi bi-person-badge text-secondary me-1"></i>{{ $user->guid }}</td>
                                            <td><i class="bi bi-calendar-check text-success me-1"></i>{{ $user->accepted_at }}</td>
                                            <td class="text-center">
                                                <span class="badge bg-primary">{{ $user->version }}</span>
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

