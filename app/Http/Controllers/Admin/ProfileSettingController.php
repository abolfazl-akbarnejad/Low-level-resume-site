<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProfileSettingRequest;
use App\Models\ProfileSetting;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic;

// use Intervention\Image\ImageManagerStatic;

class ProfileSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profileSetting = ProfileSetting::find(1)->first();
        return view('admin.settings.profile.index', compact('profileSetting'));
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $profileSetting = ProfileSetting::find(1)->first();
        return view('admin.settings.profile.edit', compact('profileSetting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfileSettingRequest $request)
    {
        $profileSetting = ProfileSetting::find(1);
        $inputs = $request->all();

        if ($request->hasFile('profileImage')) {
            $realPathProfile = $request->file('profileImage')->getRealPath();
            $pathProfile = 'assets' . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR;
            $nameProfile = 'profileImage' . '.' . explode('.', $request->file('profileImage')->getClientOriginalName())[1];
            if (file_exists($profileSetting->profileImage)) {
                unlink($profileSetting->profileImage);
            }
            $resultProfile = ImageManagerStatic::make($realPathProfile)->save(public_path($pathProfile . $nameProfile));
            $inputs['profileImage'] = $pathProfile . $nameProfile;
        }
        if ($request->hasFile('mainImage')) {
            $realPathBackground = $request->file('mainImage')->getRealPath();
            $pathBackground = 'assets' . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR;
            $nameBackground = 'mainImage' . '.' . explode('.', $request->file('mainImage')->getClientOriginalName())[1];
            if (file_exists($profileSetting->mainImage)) {
                unlink($profileSetting->mainImage);
            }
            $resultBackground = ImageManagerStatic::make($realPathBackground)->save(public_path($pathBackground . $nameBackground));
            $inputs['mainImage'] = $pathBackground . $nameBackground;
        }

        $profileSetting->update($inputs);

        return redirect()->route('admin.setting.profile.index')->with('success', 'Profile Setting Updated Successfully');
    }
}
