@extends('layouts.admin')

@php
    $breadcrumbs = [
        ['label' => 'Dashboard', 'url' => route('dashboard')],
        ['label' => 'Consent Management', 'url' => route('consents.index')],
        ['label' => 'Create Consent', 'url' => route('consents.create')],
    ];
@endphp

@section('content')

    @include('admin.consents._form', [
        'button' => 'create',
        'action' => route('consents.store'),
    ])

@endsection



