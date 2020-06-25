@extends('layouts.dashboard')

@section('title', 'Detail Invoice')

@section('content')

    <div class="card">
        <div class="card-body">
            <table id="example" class="table table-striped table-bordered">
                <tr>
                    <td>No Serial Komersil</td>
                    <td style="width: 10px">:</td>
                    <td>{{ $invoice->commercial_serial_number }}</td>
                </tr>
                <tr>
                    <td>Nama Perusahaan</td>
                    <td style="width: 10px">:</td>
                    <td>{{ $invoice->company_name }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td style="width: 10px">:</td>
                    <td>{{ $invoice->address }}</td>
                </tr>
                <tr>
                    <td>Total Tagihan</td>
                    <td style="width: 10px">:</td>
                    <td>{{ $invoice->tax_total }}</td>
                </tr>
            </table>
{{--            @if ($user->id == auth()->id())--}}
{{--                <div class="form-group">--}}
{{--                    <a href="{{ route('dashboard.user.edit', auth()->id()) }}" class="btn btn-primary btn-block">Edit User</a>--}}
{{--                </div>--}}
{{--            @endif--}}
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
