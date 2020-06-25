@extends('layouts.dashboard')

@section('title', 'Invoice')

@section('content')

    <div class="card">
        <div class="card-header">
            <div class="card-tools">
                <a href="{{ route('dashboard.invoice.create') }}" class="btn btn-primary">Tambah Data</a>
            </div>
        </div>
        <div class="card-body table-responsive">

            <table id="example" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th style="width: 20px">No</th>
                    <th>No Serial Komersil</th>
                    <th>Nama Perusahaan</th>
                    <th>Alamat</th>
                    <th>Total Tagihan</th>
                    <th>Cetak Invoice</th>
                    <th>Opsi</th>
                </tr>
                </thead>
                <tbody>

                @foreach($invoices as $invoice)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $invoice->commercial_serial_number }}</td>
                        <td>{{ $invoice->company_name }}</td>
                        <td>{{ $invoice->address }}</td>
                        <td>{{ $invoice->tax_total }}</td>
                        <td>
                            <a href="https://drive.google.com/file/d/1ZKgD75SiSiTmDasLUHF8ntylf7eiqsLR/view" class="btn btn-info btn-block">Cetak</a>
                        </td>
                        <td class="text-center">
                            <div class="row" style="width: 280px !important;">
                                <div class="col-md-4">
                                    <a href="{{ route('dashboard.invoice.show', $invoice->id) }}" class="btn btn-success btn-block">Show</a>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{ route('dashboard.invoice.edit', $invoice->id) }}" class="btn btn-info btn-block">Edit</a>
                                </div>
                                <div class="col-md-4">
                                    <form action="{{ route('dashboard.invoice.destroy', $invoice->id) }}" method="post">
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
