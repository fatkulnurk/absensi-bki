@extends('layouts.dashboard')

@section('title', 'Data Absensi')

@section('content')

    <div class="card">
        <div class="card-header">
            <div class="card-tools">
                <a href="{{ route('dashboard.attendance.create') }}" class="btn btn-primary">Tambah Data</a>
            </div>
        </div>
        <div class="card-body">
            <form action="" method="get">
                <div class="form-row">
                    <div class="col">
                        <select class="form-control mb-2 mr-sm-2" name="year" required>
                            <option value="">Tahun</option>
                            @for ($i = \Carbon\Carbon::now()->year; $i > 2015; $i--)
                                <option value="{{ $i }}"
                                        @if (request()->query('year', '') == $i)
                                selected
                                    @endif>{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="col">
                        <select class="form-control mb-2 mr-sm-2" name="month" required>
                            <option value="">Bulan</option>
                            @foreach(\App\Enums\Month::all() as $month)
                                <option value="{{ $month['key'] }}"
                                        @if (request()->query('month', '') == $month['key'] )
                                selected
                                    @endif>{{ $month['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary mb-2">Lihat Data</button>
                    </div>
                </div>
            </form>
            @if (request()->has('year') && request()->has('month'))
                <div>
                    <p>Hasil untuk tahun {{ request()->query('year') }} bulan {{ request()->query('month') }}</p>
                </div>
            @endif
            <table id="example" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th style="width: 20px">No</th>
                    <th>Tanggal</th>
                    <th style="width: 350px">Status</th>
                </tr>
                </thead>
                <tbody>

                @foreach($dates as $date)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $date->format('Y-m-d') }}</td>

                        @foreach($attendances as $attendance)
                            @if (\Carbon\Carbon::parse($attendance->date)->format('Y-m-d') === $date->format('Y-m-d'))
                                <td>
                                    {{ $attendance->status_name }}
                                </td>
                                @continue
                            @endif
                        @endforeach
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
