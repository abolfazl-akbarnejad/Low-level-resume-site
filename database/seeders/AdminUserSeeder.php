<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('users')->insert([
            'name' => 'abolfazlakbarnejad',
            'email' => 'abolfazlakbarnejad.bi@gmail.com',
            'password' => Hash::make('abolfazl1384'),
            'role_id' => 1,
        ]);
    }
}
