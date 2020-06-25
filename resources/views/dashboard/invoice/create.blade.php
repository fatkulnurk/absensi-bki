@extends('layouts.dashboard')

@section('title', 'Tambah Invoice')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">@yield('title')</h3>

            <div class="card-tools">
            </div>
        </div>
        <form action="{{ route('dashboard.invoice.store') }}" method="post" enctype="multipart/form-data" >
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>No Serial Komersil</label>
                    <input type="text" class="form-control @error('commercial_serial_number') is-invalid @enderror" name="commercial_serial_number" value="{{ old('commercial_serial_number') }}" required>
                </div>
                @error('commercial_serial_number')
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
                    <label>Alamat</label>
                    <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required>
                </div>
                @error('address')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="form-group">
                    <label>Total Tagihan</label>
                    <input type="number" class="form-control @error('tax_total') is-invalid @enderror" name="tax_total" value="{{ old('tax_total') }}" required>
                </div>
                @error('tax_total')
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
