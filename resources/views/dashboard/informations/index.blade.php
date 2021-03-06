@extends('layouts.dashboard')

@section('title', 'Informasi')

@section('content')

    <div class="card">
        <div class="card-header">
            <div class="card-tools">
                <a href="{{ route('dashboard.information.create') }}" class="btn btn-primary">Tambah Data</a>
            </div>
        </div>
        <div class="card-body">

            <table id="example" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th style="width: 20px">No</th>
                    <th style="min-width: 100px">Post by</th>
                    <th>Kode</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th style="width: 350px">Opsi</th>
                </tr>
                </thead>
                <tbody>

                @foreach($informations as $information)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ optional($information->user)->name }}</td>
                        <td>{{ $information->code }}</td>
                        <td>{{ $information->title }}</td>
                        <td>{{ $information->description }}</td>
                        <td class="text-center">
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="{{ route('dashboard.information.edit', $information->id) }}" class="btn btn-info btn-block">Edit</a>
                                </div>
                                <div class="col-md-6">
                                    <form action="{{ route('dashboard.information.destroy', $information->id) }}" method="post">
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
