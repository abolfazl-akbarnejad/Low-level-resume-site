<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\ProfileSetting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;



class ProfileSettingEnglishSedder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        DB::table('profile_setting_persians')->insert([
            'name' => Str::random(10),
            'workPakage' => Str::random(15),
            'dateBirth' => Str::random(15),
            'biography' => Str::random(30),
        ]);
    }
}
