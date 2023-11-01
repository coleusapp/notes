<a href="/notes/create">Create</a>
<h1>Notes</h1>

<table border="1">
    <thead>
    <tr>
        <td>ID</td>
        <td>Title</td>
        <td>Text</td>
        <td>Created At</td>
        <td>Deleted At</td>
        <td>Action</td>
    </tr>
    </thead>
    <tbody>
        @foreach($notes as $note)
        <tr>
            <td>{{$note->id}}</td>
            <td>{{$note->title}}</td>
            <td>{!! nl2br($note->body) !!}</td>
            <td>{{$note->created_at}}</td>
            <td>{{$note->deleted_at}}</td>
            <td>
                <a href="/notes/{{$note->id}}/edit"><button>Edit</button></a>
                <a href="/notes/{{$note->id}}"><button>Show</button></a>
                <form action="/notes/{{$note->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit">Delete</button>
                </form>
                <form action="/notes/{{$note->id}}/restore" method="POST">
                    @csrf
                    <button type="submit">Restore</button>
                </form>
                <form action="/notes/{{$note->id}}/force-delete" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE" />
                    <button type="submit">Force Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
