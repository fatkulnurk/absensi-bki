@extends('layouts.dashboard')

@section('title', 'Kualifikasi Personal')

@section('content')

    <div class="card">
        <div class="card-header">
            <div class="card-tools">
                <a href="{{ route('dashboard.personal-qualification.create') }}" class="btn btn-primary">Tambah Data</a>
            </div>
        </div>
        <div class="card-body">

            <table id="example" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th style="width: 20px">No</th>
                    <th>ID Pegawai</th>
                    <th>Nama Pegawai</th>
                    <th>Nama/Jenis Seertifikasi</th>
                    <th>Tahun</th>
                    <th style="width: 350px">Opsi</th>
                </tr>
                </thead>
                <tbody>

                @foreach($personalQualificatons as $personalQualificaton)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $personalQualificaton->user->id }}</td>
                        <td>{{ $personalQualificaton->user->name }}</td>
                        <td>{{ $personalQualificaton->name }}</td>
                        <td>{{ $personalQualificaton->year }}</td>
                        <td class="text-center">
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="{{ route('dashboard.personal-qualification.edit', $personalQualificaton->id) }}" class="btn btn-info btn-block">Edit</a>
                                </div>
                                <div class="col-md-6">
                                    <form action="{{ route('dashboard.personal-qualification.destroy', $personalQualificaton->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-block" onclick="submitForm(event)">Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
@push('javascript')

    <script>
        $(document).ready(function () {
            $('table').DataTable();
        });

        function submitForm(event){
            var confirmation = confirm("Yakin ingin menghapus data, ini ?") ;

            if (!confirmation)
            {
                event.preventDefault() ;
                window.alert('Penghapusan dibatalkan.')
            }
        }
    </script>
@endpush
