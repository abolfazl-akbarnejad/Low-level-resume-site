<?php

namespace Database\Seeders;

use App\Models\ProfileSettingPersian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;



class ProfileSettingPersianSedder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('profile_settings')->insert([
            'name' => Str::random(10),
            'workPakage' => Str::random(15),
            'dateBirth' => Str::random(15),
            'biography' => Str::random(30),
            'profileImage' => Str::random(30),
            'mainImage' => Str::random(30),
        ]);
    }
}
