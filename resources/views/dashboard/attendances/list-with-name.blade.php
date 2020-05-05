<table class="table table-striped table-bordered">
    <tr>
        <td rowspan="2">No</td>
        <td rowspan="2">NAMA</td>
        <td colspan="{{ count($dates) }}">Tanggal</td>
        <td>
            Prosentase
        </td>
    </tr>
    <tr>
        @foreach($dates as $date)
            <td>{{ $date->format('d') }}</td>
        @endforeach
        <td>Kehadiran</td>
    </tr>
    @foreach($users as $user)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $user->name }}</td>

            @php
                $sumAttendance = 0;
                $sumday = 0;
                $procentase = 0;
            @endphp

            @foreach($dates as $date)
                @if (blank($user->attendances))
                    @if ($date->format('Y-m-d') <= \Carbon\Carbon::now()->format('Y-m-d'))
                        <td>Alpha</td>
                        @php $sumday++; @endphp
                    @else
                        <td></td>
                    @endif
                @else
                    @foreach($user->attendances as $attendance)
                        @if ($attendance->date === $date->format('Y-m-d'))
                            <td>
                                {{ $attendance->status_name }}
                                @if ($attendance->status == 1)
                                    @php
                                        $sumAttendance++;
                                    @endphp
                                @endif
                                @php
                                    $sumday++;
                                @endphp
                            </td>
                            @break
                        @else
                            @if ($loop->last)
                                @if ($date->format('Y-m-d') <= \Carbon\Carbon::now()->format('Y-m-d'))
                                    <td>Alpha</td>

                                    {{ $sumday++ }}
                                @else
                                    <td></td>
                                @endif
                            @endif
                        @endif
                    @endforeach
                @endif
            @endforeach
            @php
            $total = (($sumAttendance / $sumday) * 100);
            @endphp
            <td>{{ number_format((float)$total, 2, '.', '') }} %</td>
        </tr>
    @endforeach
</table>
