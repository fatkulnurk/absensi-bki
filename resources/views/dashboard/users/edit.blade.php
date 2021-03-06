@extends('layouts.dashboard')

@section('title', 'Edit User')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">@yield('title')</h3>

            <div class="card-tools">
            </div>
        </div>
        <form action="{{ route('dashboard.user.update', $user->id) }}" method="post" enctype="multipart/form-data" >
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label>Photo Profile (optional)</label>
                    <input type="file" class="form-control-file @error('avatar') is-invalid @enderror" name="avatar">
                </div>
                @error('avatar')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="form-group">
                    <label>Nama Pengguna</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $user->name) }}" required>
                </div>
                @error('name')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="form-group">
                    <label>Jabatan</label>
                    <select class="form-control select2bs4" style="width: 100%;" name="position" required>
                        @foreach($positions as $position)
                            <option value="{{ $position->name }}" @if ($user->position == $position->name)
                                selected
                            @endif>{{ $position->name }}</option>
                        @endforeach
                    </select>
                    @error('position')
                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Hak Akses / Role</label>
                    <select class="form-control select2bs4" style="width: 100%;" name="role" required>
                        @foreach($roles as $role)
                            <option value="{{ $role->id }}" @if ($user->hasRole($role->name))
                            selected
                                @endif>{{ $role->name }}</option>
                        @endforeach
                    </select>
                    @error('role')
                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Nip</label>
                    <input type="text" class="form-control @error('nip') is-invalid @enderror" name="nip" value="{{ old('nip', $user->nip) }}" required>
                </div>
                @error('nip')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email) }}" required>
                </div>
                @error('email')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select class="form-control select2bs4" style="width: 100%;" name="gender" required>
                        <option value="laki laki"  @if ($user->gender == 'laki laki')
                        selected
                            @endif>Laki Laki</option>
                        <option value="perempuan" @if ($user->gender == 'perempuan')
                        selected
                            @endif>Perempuan</option>
                    </select>
                    @error('gender')
                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number', $user->phone_number) }}" required>
                </div>
                @error('phone_number')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control @error('address') is-invalid @enderror" name="address" required>
                        {{ old('address', $user->address) }}
                    </textarea>
                </div>
                @error('address')
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
