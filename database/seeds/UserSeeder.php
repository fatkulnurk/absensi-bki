<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = array('pimpinan', 'inspektor');

        foreach ($roles as $role) {
            \Spatie\Permission\Models\Role::create(['name' => $role]);
        }

        $roleAdmin = \Spatie\Permission\Models\Role::create(['name' => 'admin']);
        $user = \App\User::create([
            'name' => 'Admin',
            'position' => 'admin',
            'nip' => '1234567890',
            'email' => 'admin@example.com',
            'password' => \Illuminate\Support\Facades\Hash::make('12345678'),
            'gender' => 'laki laki',
            'phone_number' => '081081081081',
            'address' => 'Surabaya, Indonesia (60117)'
        ]);
        $user->assignRole($role);
    }
}
