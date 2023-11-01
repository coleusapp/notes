<a href="/notes">index</a>
<form action="{{"/notes/$note->id"}}" method="POST">
    @method('put')
    @csrf
    <input type="text" name="title" value="{{$note->title}}">
    <br />
    <textarea name="body">{{$note->body}}</textarea>
    <br />
    <button type="submit">send</button>
</form>
