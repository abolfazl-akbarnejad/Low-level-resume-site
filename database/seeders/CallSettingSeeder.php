<?php

namespace Database\Seeders;

use App\Models\CallSetting;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CallSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     
        DB::table('call_setting')->insert([
            'email' => Str::random(15). '@gmail.com',
            'phonenumber' => random_int(11111111111, 99999999999),
            'addres' => Str::random(15),
        ]);
    }
}
