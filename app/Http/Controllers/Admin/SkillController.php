<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSkillRequest;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = Skill::orderBy('id', 'desc')->get();
        return view('admin.skill.index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.skill.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSkillRequest $request)
    {
        Skill::create($request->all());
        return redirect()->route('admin.skill.index');
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
    public function edit(Skill $skill)
    {

        if (!$skill) {
            return redirect()->route('admin.skill.index)');
        } else {
            return view('admin.skill.edit', compact('skill'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreSkillRequest $request, Skill $skill)
    {
        if (!$skill) {
            return redirect()->route('admin.skill.index)');
        } else {
            $skill->update($request->all());
            return redirect()->route('admin.skill.index');
            // return redirect()->route('admin.skill.index)');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        if (!$skill) {
            return redirect()->route('admin.skill.index');
        } else {
            $skill->delete();
            return redirect()->route('admin.skill.index');
        }

    }
}