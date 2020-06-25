<?php

use Illuminate\Database\Seeder;

class UserAndRoleNewSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = \Spatie\Permission\Models\Role::findByName('inspektor');
        $user = \App\User::create([
            'name' => 'koordinator bidang',
            'position' => 'koordinator bidang',
            'nip' => '12345678913',
            'email' => 'koordinatorbidang@example.com',
            'password' => \Illuminate\Support\Facades\Hash::make('12345678'),
            'gender' => 'laki laki',
            'phone_number' => '081081081089',
            'address' => 'Surabaya, Indonesia (60117)'
        ]);
        $user->assignRole($role);
    }
}
