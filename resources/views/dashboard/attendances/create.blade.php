@extends('layouts.dashboard')

@section('title', 'Tambah data absensi')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">@yield('title')</h3>

            <div class="card-tools">
            </div>
        </div>
        <form action="{{ route('dashboard.attendance.store') }}" method="post">
            @csrf
            <div class="card-body">

                <div class="form-group">
                    <label>User</label>
                    <select class="form-control select2bs4" style="width: 100%;" name="user_id" required>
                        @foreach($users as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                    @error('user_id')
                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" class="form-control @error('start_date') is-invalid @enderror" name="date" value="{{ old('start_date') }}" required>
                </div>
                @error('start_date')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror


                <div class="form-group">
                    <label>Status</label>
                    <select class="form-control select2bs4" style="width: 100%;" name="status" required>
                       <option value="1">Hadir</option>
                       <option value="2">Alpha</option>
                       <option value="3">Sakit</option>
                       <option value="4">Izin</option>
                    </select>
                    @error('user_id')
                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>

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
