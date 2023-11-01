<a href="/notes">Index</a>
<a href="/notes/{{$note->id}}/edit">Edit</a>

<table>
    <tr>
        <th>ID:</th>
        <td>{{$note->id}}</td>
    </tr>
    <tr>
        <th>Title:</th>
        <td>{{$note->title}}</td>
    </tr>
    <tr>
        <th>Body:</th>
        <td>{!! nl2br($note->body) !!}</td>
    </tr>
    <tr>
        <th>Created At:</th>
        <td>{{$note->created_at}}</td>
    </tr>
    <tr>
        <th>Updated At:</th>
        <td>{{$note->updated_at}}</td>
    </tr>
    <tr>
        <th>Deleted At:</th>
        <td>{{$note->deleted_at}}</td>
    </tr>
</table>
