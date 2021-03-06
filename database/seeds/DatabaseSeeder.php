<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(MasterPositionSeeder::class);
        $this->call(InspectionSeeder::class);
        $this->call(AttendanceSeeder::class);
        $this->call(UserAndRoleNewSeed::class);
    }
}
