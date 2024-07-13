<?php

namespace Database\Seeders;

use App\Models\BackendUser;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class BackendUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'first_name' => 'Emguide',
                'last_name' => 'Emguide',
                'login' => 'emguide',
                'password' => Hash::make('emguidePassword1!#'),
                'email' => 'bshengleia!@gmail.com',
                'super_admin' => true,
            ],
        ];

        BackendUser::insert($data);
    }
}
