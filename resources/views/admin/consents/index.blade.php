@extends('layouts.admin')

@php
    $breadcrumbs = [
        ['label' => 'Dashboard', 'url' => route('dashboard')],
        ['label' => 'Consent Management', 'url' => route('consents.index')],
    ];
@endphp

@section('content')


<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-lg-10">

            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="fw-bold text-dark mb-0">
                    <i class="bi bi-shield-check me-2 text-success"></i>Consent Management
                </h3>
                <a href="{{ url()->previous() }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left"></i> Back
                </a>
            </div>

            <!-- Displa Active Consent-->
            <div class="card border-0 shadow-sm rounded-4 mb-3">
                <div class="card-header bg-dark text-white rounded-top-4">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h5 class="mb-0"><i class=" text-success bi bi-shield-fill-check me-2"></i>Active Consent</h5>
                        </div>
                        <div>
                            <h5>
                                Version - <span class="badge bg-info py-2">{{ __($activeConsent->version ?? 'N/A') }}</span>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="card-body bg-light p-4">

                    <div class="modal-body bg-light">
                        @if($content)
                            {!!$content!!}
                        @else
                            <div class="alert alert-info text-center mt-3">
                                <i class="bi bi-info-circle me-2"></i>No consent data found.
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Data Table -->
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-header bg-dark text-white rounded-top-4">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h5 class="mb-0"><i class="bi bi-list-check me-2"></i>Consent Lists</h5>
                        </div>
                        <div>
                            <a class="btn btn-sm  btn-primary" href="{{ route('consents.create') }}" role="button"><i class="bi bi-plus me-2"></i>Create</a>
                        </div>
                    </div>
                </div>
                <div class="card-body bg-light p-4">
                    @if(count($datas) > 0)
                        <div class="table-responsive">
                            <table class="table align-middle table-hover table-striped mb-0">
                                <thead class="table-dark">
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Consent Content</th>
                                        <th class="text-center">Version</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Created By</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($datas as $key => $consent)
                                        <tr>
                                            <td class="text-center fw-bold">{{ $key + 1 }}</td>
                                            <td>
                                                <textarea disabled class="form-control" id="" cols="40" rows="4">{{ $consent->consent_text }}</textarea>
                                            </td>
                                            <td class="text-center">
                                                <span class="badge bg-info py-2">{{ $consent->version }}</span>
                                            </td>
                                             <td class="text-center">
                                                @if($consent->status === 'active')
                                                    <span class="badge bg-success">{{ $consent->status }}</span>
                                                @else
                                                    <span class="badge bg-danger">{{ $consent->status }}</span>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $consent->admin->name }}</td>
                                            <td class="text-center">
                                                <div class="d-grid gap-2 d-md-block">
                                                    @if($consent->status === 'deactive')
                                                    <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-sm btn-success activate-btn" data-bs-toggle="modal" data-bs-target="#consentModal" data-id="{{ $consent->id }}" data-version="{{ $consent->version }}">
                                                            Activate
                                                        </button>
                                                    @endif
                                                </div>
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

<!-- Modal -->
<div class="modal fade" id="consentModal" tabindex="-1" aria-labelledby="consentModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="consentModalLabel"> Version </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="editForm" method="POST">
        @csrf
        @method('PUT')
        <div class="modal-body">
            <input type="hidden" id="editItemId" name="id">
            Are you sure want to use this version of consent form?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Accept</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('.activate-btn').on('click', function() {
            var itemId = $(this).data('id');
            var itemVersion = $(this).data('version');

            $('#editItemId').val(itemId);
            $('#consentModalLabel').text('Consent Version : ' + itemVersion);
            $('#editForm').attr('action', '/activate/' + itemId);
        });
    });
</script>
@endpush


