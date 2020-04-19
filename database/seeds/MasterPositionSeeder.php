<?php

use Illuminate\Database\Seeder;

class MasterPositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $positions = [
            'admin', 'pimpinan', 'inspektor'
        ];

        foreach ($positions as $position) {
            \App\MasterPosition::create(['name' => $position]);
        }
    }
}
