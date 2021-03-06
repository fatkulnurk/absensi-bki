@extends('layouts.dashboard')

@if (auth()->user()->hasRole(\App\Enums\RoleEnum::$admin))
    @section('title', 'SPK PO')
@else
    @section('title', 'Pemilihan Inspektur')
@endif


@section('content')

    <div class="card">
        <div class="card-header">
            <div class="card-tools">
                @if (auth()->user()->hasRole(\App\Enums\RoleEnum::$admin))
                    <a href="{{ route('dashboard.spk-po.create') }}" class="btn btn-primary">Tambah Data</a>
                @endif
            </div>
        </div>
        <div class="card-body table-responsive">

            <table id="example" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th style="width: 20px">No</th>
                    <th>SPK Number</th>
                    <th>Nama Pekerjaan</th>
                    <th>Lokasi</th>
                    <th>Owner</th>
                    <th>Nama Perusahaan</th>
                    <th>Cetak P1</th>
                    <th>Cetak PO</th>
                    <th>Opsi</th>
                </tr>
                </thead>
                <tbody>

                @foreach($spkPo as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->spn_number }}</td>
                        <td>{{ $item->job_name }}</td>
                        <td>{{ $item->location }}</td>
                        <td>{{ $item->owner }}</td>
                        <td>{{ $item->company_name }}</td>
                        <td>
                            <a href="https://drive.google.com/file/d/1rpLOYMZ2xDCPjFN4e8pRZw0Zej6whWPm/view" class="btn btn-success btn-block">Cetak</a>
                        </td>
                        <td>
                            @if (blank($item->user))
                                <a href="#" class="btn btn-secondary btn-block disabled" disabled="">Cetak</a>
                            @else
                                <a href="https://drive.google.com/file/d/1RWC6RO_pgvInso7WbvkULbUh3dLDHvIK/view" class="btn btn-primary btn-block">Cetak</a>
                            @endif
                        </td>
                        <td class="text-center">
                            <div class="row" style="width: 280px !important;">
                                <div class="col-md-4">
                                    <a href="{{ route('dashboard.spk-po.show', $item->id) }}" class="btn btn-success btn-block">Show</a>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{ route('dashboard.spk-po.edit', $item->id) }}" class="btn btn-info btn-block">Edit</a>
                                </div>

                                @if (auth()->user()->hasRole(\App\Enums\RoleEnum::$admin))
                                    <div class="col-md-4">
                                        <form action="{{ route('dashboard.spk-po.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-block" onclick="submitForm(event)">Hapus</button>
                                        </form>
                                    </div>
                                @endif
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
