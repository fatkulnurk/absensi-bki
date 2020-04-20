@extends('layouts.dashboard')

@section('title', 'Detail Pengguna')

@section('content')

    <div class="card">
        <div class="card-body">
            <table id="example" class="table table-striped table-bordered">
                <tr>
                    <td colspan="3" class="text-center">
                        <img src="{{ $user->avatar }}" style="max-height: 120px">
                    </td>
                </tr>
                <tr>
                    <td style="width: 150px">Nama Lengkap</td>
                    <td style="width: 10px">:</td>
                    <td>{{ $user->name }}</td>
                </tr>
                <tr>
                    <td>Nip</td>
                    <td style="width: 10px">:</td>
                    <td>{{ $user->nip }}</td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td style="width: 10px">:</td>
                    <td>{{ $user->position }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td style="width: 10px">:</td>
                    <td>{{ $user->email }}</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td style="width: 10px">:</td>
                    <td>{{ $user->gender }}</td>
                </tr>
                <tr>
                    <td>Nomor Telepon</td>
                    <td style="width: 10px">:</td>
                    <td>{{ $user->phone_number }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td style="width: 10px">:</td>
                    <td>{{ $user->address }}</td>
                </tr>
                <tr>
                    <td>Hak Akses</td>
                    <td style="width: 10px">:</td>
                    <td>
                        @foreach(optional($user)->getRoleNames() as $role)
                            {{ $role }}
                            @if (!$loop->last)
                                ,
                            @endif
                        @endforeach
                    </td>
                </tr>
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
