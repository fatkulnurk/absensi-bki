@extends('layouts.dashboard')

@section('title', 'Tambah SPK PO')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">@yield('title')</h3>

            <div class="card-tools">
            </div>
        </div>
        <form action="{{ route('dashboard.spk-po.store') }}" method="post" enctype="multipart/form-data" >
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>SPN Number</label>
                    <input type="text" class="form-control @error('spn_number') is-invalid @enderror" name="spn_number" value="{{ old('spn_number') }}" required>
                </div>
                @error('spn_number')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror


                <div class="form-group">
                    <label>Nama Pekerjaan</label>
                    <input type="text" class="form-control @error('job_name') is-invalid @enderror" name="job_name" value="{{ old('job_name') }}" required>
                </div>
                @error('job_name')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror


                <div class="form-group">
                    <label>Lokasi</label>
                    <input type="text" class="form-control @error('location') is-invalid @enderror" name="location" value="{{ old('location') }}" required>
                </div>
                @error('location')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror


                <div class="form-group">
                    <label>Owner</label>
                    <input type="text" class="form-control @error('owner') is-invalid @enderror" name="owner" value="{{ old('owner') }}" required>
                </div>
                @error('owner')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror


                <div class="form-group">
                    <label>Nama Perusahaan</label>
                    <input type="text" class="form-control @error('company_name') is-invalid @enderror" name="company_name" value="{{ old('company_name') }}" required>
                </div>
                @error('company_name')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror


                <div class="form-group">
                    <button class="btn btn-primary btn-block">Submit</button>
                </div>

            </div>
        </form>
    </div>
@endsection

@push('head')
    <link rel="stylesheet" href="{{ asset('adminlte-3.0.2/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte-3.0.2/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endpush

@push('javascript')
    <script src="{{ asset('adminlte-3.0.2/plugins/select2/js/select2.full.min.js') }}"></script>

    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
        })
    </script>
@endpush
