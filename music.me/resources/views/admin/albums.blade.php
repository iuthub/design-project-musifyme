@extends('layouts.admin')
@section('table')
<thead>
        <tr>
                <th>#</th>
                <th>Name</th>
                <th>Photo</th>
                <th>Artist</th>
                <th>Genres</th>
                <th>Songs</th>
        </tr>
</thead>

<tbody>
    @foreach($albums as $i => $album)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $album->name }}</td>
        <td>
            <button type="button" id="showPicture" class="btn showPicture" data-toggle="modal" data-target="#exampleModalCenter" data-bind="{{ asset('photo/albums/'.$album->photo) }}">
                Show
            </button>
        </td>
        <td>
            {{ $album->artist->name }}
        </td>
        <td>
           @foreach($genres[$i] as $genre)
            {{ $genre }}<br/>
           @endforeach
        </td>
        <td>
            @foreach($album->songs as $song)
                {{ $song->name }}<br/>
            @endforeach
        </td>
       <td>
            <form id="album_delete" data-target="albums" class="delete" action="#">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" id="id" name="id" value="{{ $album->id }}">
                <button type="submit" class="btn" id="deleteBtn">Delete</button>
            </form>
        </td>
        <td>
            <a  href="albums/edit/{{ $album->id }}"><button type="button" class="btn">Edit</button></a>
        </td>
    </tr>
    @endforeach
</tbody>
<a href="albums/add"><button type="button" class="btn btn-primary" id="">Add new album</button></a>
@endsection


