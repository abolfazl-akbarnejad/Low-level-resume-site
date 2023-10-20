<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProfileSettngPersianRequest;
use App\Models\ProfileSettingPersian;
use Illuminate\Http\Request;

class ProfileSettingPersianController extends Controller
{
    public function index()
    {
        $profile = ProfileSettingPersian::find(1)->first();
        return view('admin.settings.profile_persian.index', compact('profile'));
    }

    public function edit()
    {
        $profileEdit = ProfileSettingPersian::find(1)->first();
        return view('admin.settings.profile_persian.edit', compact('profileEdit'));

    }

    public function update(UpdateProfileSettngPersianRequest $request)
    {
        $profileUpdate = ProfileSettingPersian::find(1)->first();
        $profileUpdate->update($request->all());
        return redirect()->route('admin.setting.profilePersian.index');
    }
}