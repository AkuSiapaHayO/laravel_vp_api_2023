<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = "Evan Tanuwijaya";
        $user->email = "evantanu@gmail.com";
        $user->password = Hash::make('Evan1234');
        $user->phone = '081233456789';
        $user->age = 27;
        $user->save();

        $user = new User();
        $user->name = "Budi Sulaiman";
        $user->email = "budisula@gmail.com";
        $user->password = Hash::make('Budi1234');
        $user->phone = '0857583493838737373';
        $user->age = 20;
        $user->save();

    }
}
