@extends('layouts.dashboard')

@section('title', 'SPI')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">@yield('title')</h3>

            <div class="card-tools">
            </div>
        </div>
        <form action="{{ route('dashboard.spi.store') }}" method="post" enctype="multipart/form-data" >
            @csrf
            <div class="card-body">
                <input type="text" class="form-control @error('spn_number') is-invalid @enderror" name="spk_po_id" value="{{ old('spk_po_id', $spkPo->id) }}" required hidden>

                <div class="form-group">
                    <label>SPN Number</label>
                    <input type="text" class="form-control @error('spn_number') is-invalid @enderror" name="spn_number" value="{{ old('spn_number', $spkPo->spn_number) }}" required disabled>
                </div>
                @error('spn_number')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror


                <div class="form-group">
                    <label>Nama Proyek</label>
                    <input type="text" class="form-control @error('project_name') is-invalid @enderror" name="project_name" value="{{ old('project_name' , $spkPo->job_name) }}" disabled required>
                </div>
                @error('project_name')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror


                <div class="form-group">
                    <label>Nama Perusahaan</label>
                    <input type="text" class="form-control @error('company_name') is-invalid @enderror" name="company_name" value="{{ old('company_name', $spkPo->company_name) }}" disabled required>
                </div>
                @error('company_name')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="form-group">
                    <label>Nomor Telepon</label>
                    <input type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required>
                </div>
                @error('phone_number')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="form-group">
                    <label>Spesifikasi Pekerjaan</label>
                    <textarea type="text" class="form-control @error('job_description') is-invalid @enderror" name="job_description" required>{{ old('job_description') }}</textarea>
                </div>
                @error('job_description')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="form-group">
                    <label>Tanggal Awal</label>
                    <input type="date" class="form-control @error('start_date') is-invalid @enderror" name="start_date" value="{{ old('start_date') }}" required>
                </div>
                @error('start_date')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <div class="form-group">
                    <label>Tanggal Akhir</label>
                    <input type="date" class="form-control @error('finish_date') is-invalid @enderror" name="finish_date" value="{{ old('finish_date') }}" required>
                </div>
                @error('finish_date')
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
