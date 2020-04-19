@extends('layouts.dashboard')

@section('title', 'Master Jabatan')

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">@yield('title')</h3>
            <div class="card-tools">
                <a href="{{ route('dashboard.master-position.create') }}" class="btn btn-primary">Tambah Data</a>
            </div>
        </div>
        <div class="card-body">

            <table id="example" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th style="width: 20px">No</th>
                    <th>Nama</th>
                    <th style="width: 350px">Opsi</th>
                </tr>
                </thead>
                <tbody>

                @foreach($positions as $position)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $position->name }}</td>
                        <td class="text-center">
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="{{ route('dashboard.master-position.edit', $position->id) }}" class="btn btn-info btn-block">Edit</a>
                                </div>
                                <div class="col-md-6">
                                    <form action="{{ route('dashboard.master-position.destroy', $position->id) }}" method="post">
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
