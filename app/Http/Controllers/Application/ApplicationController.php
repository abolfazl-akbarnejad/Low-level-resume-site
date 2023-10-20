<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Models\CallSetting;
use App\Models\Note;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use App\Models\ProfileSetting;
use App\Models\ProfileSettingPersian;
use App\Models\Services;
use App\Models\Skill;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index()
    {

        $profileEnglishTable = ProfileSetting::first();
        $profilePersianhTable = ProfileSettingPersian::first();
        $callsTable = CallSetting::first();
        $socialMedia = SocialMedia::all();
        $ServicesTable = Services::all();
        $SkillsTable = Skill::all();
        // dd($SkillsTable->where('status', 1)->count());
        $categoryPortfolios = PortfolioCategory::all();
        $Portfolios = Portfolio::all();


        return view('application.index', compact(['profileEnglishTable', 'profilePersianhTable', 'socialMedia', 'callsTable', 'ServicesTable', 'SkillsTable', 'categoryPortfolios', 'Portfolios']));
    }
}
