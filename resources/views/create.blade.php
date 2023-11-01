<a href="/notes">index</a>
<form action="/notes" method="POST">
    @csrf
    <input type="text" name="title">
    <br />
    <textarea name="body"></textarea>
    <br />
    <button type="submit">add</button>
</form>