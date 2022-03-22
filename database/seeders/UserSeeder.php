<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'name'              => 'Amirul Aron',
            'email'             => 'amirul@example.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password'          => bcrypt('4M4Z1NG_2022')
        ];
        $user = User::create($data);
    }
}
