@extends('layouts.dashboard')

@section('title', 'Pengajuan CUTI')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">@yield('title')</h3>

            <div class="card-tools">
            </div>
        </div>
        <form action="{{ route('dashboard.leave.update', $leave->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="card-body">

                <div class="form-group">
                    <label>User</label>
                    <select class="form-control select2bs4" style="width: 100%;" name="user_id" required disabled>
                        <option value="{{ $leave->user_id }}">{{ $leave->user->name }}</option>
                    </select>
                    @error('user_id')
                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Tahun</label>
                    <input type="number" class="form-control @error('year') is-invalid @enderror" name="year" value="{{ old('year', $leave->year) }}" min="1969" max="2049" minlength="4" maxlength="4" required disabled>
                </div>
                @error('year')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="form-group">
                    <label>Berapa lama (Dalam hari kerja)</label>
                    <input type="number" class="form-control @error('long') is-invalid @enderror" name="long" value="{{ old('long', $leave->long) }}" required disabled>
                </div>
                @error('long')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="form-group">
                    <label>Dari Tanggal</label>
                    <input type="date" class="form-control @error('start_date') is-invalid @enderror" name="start_date" value="{{ old('start_date', $leave->start_date) }}" required disabled>
                </div>
                @error('start_date')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="form-group">
                    <label>Sampai Tanggal</label>
                    <input type="date" class="form-control @error('end_date') is-invalid @enderror" name="end_date" value="{{ old('end_date', $leave->end_date) }}" required disabled>
                </div>
                @error('end_date')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="form-group">
                    <label>Bekerja Di</label>
                    <textarea class="form-control @error('work_at') is-invalid @enderror" name="work_at" required disabled>
                        {{ old('work_at', $leave->work_at) }}
                    </textarea>
                </div>
                @error('work_at')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="form-group">
                    <label>Digantikan Oleh</label>
                    <textarea class="form-control @error('substitute') is-invalid @enderror" name="substitute" required disabled>
                        {{ old('substitute', $leave->substitute) }}
                    </textarea>
                </div>
                @error('substitute')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="form-group">
                    <label>Alasan</label>
                    <textarea class="form-control @error('excuse') is-invalid @enderror" name="excuse" required disabled>
                        {{ old('excuse', $leave->excuse) }}
                    </textarea>
                </div>
                @error('excuse')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror


                <div class="form-group">
                    <label>Status</label>
                    <select class="form-control select2bs4" style="width: 100%;" name="status" required>
                        @foreach(\App\Enums\LeavesEnum::statusAll() as $status)
                            <option value="{{ $status }}"
                                    @if ($leave->status == $status)
                                        selected
                                    @endif
                            >{{ leave_status_to_str($status) }}</option>
                        @endforeach
                    </select>
                    @error('status')
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
