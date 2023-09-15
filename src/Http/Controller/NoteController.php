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
        $csrf = csrf_token();

        return <<<PHP_DUMMY
<a href="/notes/notes/create">Create</a>
<h1>Notes</h1>
$notes

delete
<form action="/notes/notes/1" method="POST">
<input type="hidden" name="_method" value="DELETE" />
<input type="hidden" name="_token" value="$csrf" />
<button type="submit">delete</button>
</form>
PHP_DUMMY;
    }

    public function create()
    {
        $csrf = csrf_token();
        return <<<PHP_DUMMY
<a href="/notes/notes">index</a>
<form action="/notes/notes" method="POST">
<input type="hidden" name="_token" value="$csrf" />
<input type="text" name="title">
<br />
<textarea name="text"></textarea>
<br />
<button type="submit">send</button>
</form>
PHP_DUMMY;
    }

    public function store(NoteRequest $request)
    {
        Note::create($request->validated());
    }

    public function edit(Note $note)
    {
        $csrf = csrf_token();
        return <<<PHP_DUMMY
<a href="/notes/notes">index</a>
<form action="/notes/notes/$note->id" method="POST">
<input type="hidden" name="_method" value="PUT" />
<input type="hidden" name="_token" value="$csrf" />
<input type="text" name="title" value="$note->title">
<br />
<textarea name="text">$note->text</textarea>
<br />
<button type="submit">send</button>
</form>
PHP_DUMMY;
    }

    public function update(Note $note, NoteRequest $request)
    {
        $note->update($request->validated());

        return redirect('/notes/notes');
    }

    public function destroy(Note $note)
    {
        $note->delete();

        return back();
    }
}
