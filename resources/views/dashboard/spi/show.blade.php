@extends('layouts.dashboard')

@section('title', 'Detail SPI')

@section('content')

    <div class="card">
        <div class="card-body">
            <table id="example" class="table table-striped table-bordered">
                <tr>
                    <td>SPK Number</td>
                    <td style="width: 10px">:</td>
                    <td>{{ $spkPo->spn_number }}</td>
                </tr>

                <tr>
                    <td>Nama Pekerjaan</td>
                    <td style="width: 10px">:</td>
                    <td>{{ $spkPo->job_name }}</td>
                </tr>

                <tr>
                    <td>Nama Perusahaan</td>
                    <td style="width: 10px">:</td>
                    <td>{{ $spkPo->company_name }}</td>
                </tr>

                <tr>
                    <td>Nomor Telepon</td>
                    <td style="width: 10px">:</td>
                    <td>{{ $spkPo->spi->phone_number }}</td>
                </tr>

                <tr>
                    <td>Deskripsi Pekerjaan</td>
                    <td style="width: 10px">:</td>
                    <td>{{ $spkPo->spi->job_description }}</td>
                </tr>

                <tr>
                    <td>Tanggal Mulai</td>
                    <td style="width: 10px">:</td>
                    <td>{{ $spkPo->spi->start_date }}</td>
                </tr>
                <tr>
                    <td>Tanggal Selesai</td>
                    <td style="width: 10px">:</td>
                    <td>{{ $spkPo->spi->finish_date }}</td>
                </tr>

{{--                <tr>--}}
{{--                    <td>Nama Pekerjaan</td>--}}
{{--                    <td style="width: 10px">:</td>--}}
{{--                    <td>{{ $spkPo->job_name }}</td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <td>Lokasi</td>--}}
{{--                    <td style="width: 10px">:</td>--}}
{{--                    <td>{{ $spkPo->location }}</td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <td>Owner</td>--}}
{{--                    <td style="width: 10px">:</td>--}}
{{--                    <td>{{ $spkPo->owner }}</td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <td>Nama Perusahaan</td>--}}
{{--                    <td style="width: 10px">:</td>--}}
{{--                    <td>{{ $spkPo->company_name }}</td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <td>Inspektor</td>--}}
{{--                    <td style="width: 10px">:</td>--}}
{{--                    <td>{{ optional($spkPo->user)->name }}</td>--}}
{{--                </tr>--}}
            </table>
{{--            @if ($user->id == auth()->id())--}}
{{--                <div class="form-group">--}}
{{--                    <a href="{{ route('dashboard.user.edit', auth()->id()) }}" class="btn btn-primary btn-block">Edit User</a>--}}
{{--                </div>--}}
{{--            @endif--}}
{{--            <div class="form-group">--}}
{{--                <a href="" class="btn btn-primary btn-block">Cetak Spi</a>--}}
{{--            </div>--}}
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
