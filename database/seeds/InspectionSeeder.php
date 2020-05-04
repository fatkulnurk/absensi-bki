<?php

use Illuminate\Database\Seeder;

class InspectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ['Bid. Industri', 'Bid. Marine', 'Bid. Migas'];
        foreach ($data as $item) {
            \App\Inspection::create(['name' => $item]);
        }

    }
}
