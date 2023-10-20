<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateCallRequest;
use App\Models\CallSetting;
use Illuminate\Http\Request;

class CallSettingController extends Controller
{
    public function index()
    {
        $callSetting = CallSetting::find(1)->first();
        return view('admin.settings.call.index', compact('callSetting'));
    }

    public function edit()
    {
        $callSetting = CallSetting::find(1)->first();
        return view('admin.settings.call.edit', compact('callSetting'));
    }

    public function update(UpdateCallRequest $request)
    {
        $callSetting = CallSetting::find(1)->first();
        $inputs = $request->all();
        // $request->extract(['_token']);
        // dd($request);
        $result = $callSetting->update($inputs);
        return redirect()->route('admin.setting.call.index');
    }
}