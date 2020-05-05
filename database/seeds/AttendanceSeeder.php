<?php

use Carbon\CarbonPeriod;
use Illuminate\Database\Seeder;

class AttendanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // user inspektor
        $user = \App\User::findOrFail(2);

        $period = CarbonPeriod::create('2019-03-15', '2020-05-05');
        foreach ($period as $date) {
            \App\Attendance::create([
                'user_id' => $user->id,
                'date' => $date->format('Y-m-d'),
                'status' => rand(1, 4)
            ]);
        }
    }
}
