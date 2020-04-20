@extends('layouts.dashboard')

@section('title', 'Semua Pengguna')

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">@yield('title')</h3>
            <div class="card-tools">
                <a href="{{ route('dashboard.user.create') }}" class="btn btn-primary">Tambah Data</a>
            </div>
        </div>
        <div class="card-body">

            <table id="example" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th style="width: 20px">No</th>
                    <th>Nama</th>
                    <th>Nip</th>
                    <th>Email</th>
                    <th style="width: 350px">Opsi</th>
                </tr>
                </thead>
                <tbody>

                @foreach($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->nip }}</td>
                        <td>{{ $user->email }}</td>
                        <td class="text-center">
                            <div class="row">
                                <div class="col-md-4">
                                    <a href="{{ route('dashboard.user.show', $user->id) }}" class="btn btn-success btn-block">Show</a>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{ route('dashboard.user.edit', $user->id) }}" class="btn btn-info btn-block">Edit</a>
                                </div>
                                <div class="col-md-4">
                                    <form action="{{ route('dashboard.user.destroy', $user->id) }}" method="post">
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
