@extends('layouts.dashboard')

@section('title', 'SPI')

@section('content')

    <div class="card">
        <div class="card-header">
            <div class="card-tools">
{{--                @if (auth()->user()->hasRole(\App\Enums\RoleEnum::$admin))--}}
{{--                    <a href="{{ route('dashboard.spk-po.create') }}" class="btn btn-primary">Tambah Data</a>--}}
{{--                @endif--}}
            </div>
        </div>
        <div class="card-body table-responsive">

            <table id="example" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th style="width: 20px">No</th>
                    <th>No SPK</th>
                    <th>Nama Pekerjaan</th>
                    <th>Nama Perusahaan</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                @foreach($spkPo as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->spn_number }}</td>
                        <td>{{ $item->job_name }}</td>
                        <td>{{ $item->company_name }}</td>
                        <td>
                            @if (blank($item->spi))
                                <a href="{{ route('dashboard.spi.create', ['spk_po_id' => $item->id]) }}" class="btn btn-info btn-block">Buat SPI</a>
                            @else
                                <a href="{{ route('dashboard.spi.show',  $item->id) }}" class="btn btn-success">Lihat Spi</a>
                                <a href="//Intip.in/bkispi" class="btn btn-primary">Cetak SPI</a>
                            @endif
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
