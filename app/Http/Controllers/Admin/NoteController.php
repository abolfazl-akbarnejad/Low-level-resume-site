<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Note::create($request->all);
        $note = new Note;
        $note->name = $request->input('name');
        $note->save();
        return response()->json(['message' => 'انجام شده']);
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}