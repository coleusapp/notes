<?php

namespace Coleus\Notes\Http\Controller;

use Coleus\Notes\Http\Requests\NoteRequest;
use Coleus\Notes\Models\Note;
use Illuminate\Routing\Controller;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::withTrashed()->get();

        return view('notes::index', compact('notes'));
    }

    public function show(Note $note)
    {
        return view('notes::show', compact('note'));
    }

    public function create()
    {
        return view('notes::create');
    }

    public function store(NoteRequest $request)
    {
        Note::create($request->validated());

        return back();
    }

    public function edit(Note $note)
    {
        return view('notes::edit', compact('note'));
    }

    public function update(Note $note, NoteRequest $request)
    {
        $note->update($request->validated());

        return back();
    }

    public function destroy(Note $note)
    {
        $note->delete();

        return back();
    }

    public function forceDelete(Note $note)
    {
        $note->forceDelete();

        return back();
    }

    public function restore(Note $note)
    {
        $note->restore();

        return back();
    }
}
