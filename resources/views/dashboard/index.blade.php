@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')

    <div class="row">
        <div class="col-6">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="far fas fa-user-alt"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Pegawai</h4>
                    </div>
                    <div class="card-body">
                        {{ $user }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Informasi</h4>
                    </div>
                    <div class="card-body">
                        {{ $information }}
                    </div>
                </div>
            </div>
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
