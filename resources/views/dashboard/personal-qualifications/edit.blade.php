@extends('layouts.dashboard')

@section('title', 'Tambah Informasi')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">@yield('title')</h3>

            <div class="card-tools">
            </div>
        </div>
        <form action="{{ route('dashboard.personal-qualification.update', $personalQualification->id) }}" method="post">
            @csrf
            @method('put')
            <div class="card-body">

                <div class="form-group">
                    <label>User</label>
                    <select class="form-control select2bs4" style="width: 100%;" name="user_id" required>
                        @foreach($users as $item)
                            <option value="{{ $item->id }}"
                                    @if ($item->id == $personalQualification->user_id)
                                        selected
                                    @endif
                            >{{ $item->name }}</option>
                        @endforeach
                    </select>
                    @error('user_id')
                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Nama / Jenis Sertifikat</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $personalQualification->name) }}" required>
                </div>
                @error('name')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="form-group">
                    <label>Tahun</label>
                    <input type="number" class="form-control @error('year') is-invalid @enderror" name="year" value="{{ old('year', $personalQualification->year) }}" min="1969" max="2049" minlength="4" maxlength="4" required>
                </div>
                @error('year')
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

        document.querySelector("input[type=number]")
            .oninput = e => console.log(new Date(e.target.valueAsNumber, 0, 1))
    </script>
@endpush
