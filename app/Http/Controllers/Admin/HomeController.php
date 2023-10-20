<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CallSetting;
use App\Models\Note;
use App\Models\ProfileSetting;
use App\Models\ProfileSettingPersian;
use Database\Seeders\CallSettingSeeder;
use Database\Seeders\ProfileSettingEnglishSedder;
use Database\Seeders\ProfileSettingPersianSedder;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    //home
    public function index()
    {
        $notes = Note::orderBy('id', 'desc')->get();

        //profiles
        $profileEnglish = ProfileSetting::first();
        $profilepersian = ProfileSettingPersian::first();
        $call = CallSetting::first();

        if ($profileEnglish === null) {
            $defult = new ProfileSettingEnglishSedder();
            $defult->run();
        }
        if ($profilepersian === null) {
            $defult = new ProfileSettingPersianSedder();
            $defult->run();
        }
        if ($call === null) {
            $defult = new CallSettingSeeder();
            $defult->run();
        }
        //

        return view('admin.index', compact('notes'));
    }


    public function notecreate(Request $request)
    {
        // dd(Request::ajax());
    }

    public function notestatus()
    {
        dd('hi');
    }
}
