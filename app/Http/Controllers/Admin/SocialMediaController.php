<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSocialMediaRequest;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $socialMedia = SocialMedia::orderBy('id', 'desc')->get();

        return view('admin.social_media.index', compact('socialMedia'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.social_media.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSocialMediaRequest $request)
    {

        $inputs = $request->all();

        SocialMedia::create($inputs);
        return redirect()->route('admin.socialMedia.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $socialMedia = SocialMedia::find($id);
        if (!$socialMedia) {
            return redirect()->route('admin.socialMedia.index');
        } else {
            return view('admin.social_media.edit', compact('socialMedia'));

        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreSocialMediaRequest $request, SocialMedia $socialMedia)
    {

        if ($socialMedia) {
            $socialMedia->update($request->all());
        } else {
            return redirect()->route('admin.socialMedia.index');
        }
        return redirect()->route('admin.socialMedia.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SocialMedia $socialMedia)
    {
        // dd($socialMedia);
        if ($socialMedia) {
            $socialMedia->delete();
        } else {
            return redirect()->route('admin.socialMedia.index');
        }
        return redirect()->route('admin.socialMedia.index');
    }
}