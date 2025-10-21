@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card mt-5">
                <h3 class="card-header p-3 text-white bg-dark">User Consent</h3>
                <div class="card-body">
                    <table class="table table-bordered data-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>GUID</th>
                                <th>Accepted Date</th>
                                <th>Version</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $key => $user)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $user->guid }}</td>
                                    <td>{{ $user->accepted_at }}</td>
                                    <td>
                                        {{ $user->version}}
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
@endsection
