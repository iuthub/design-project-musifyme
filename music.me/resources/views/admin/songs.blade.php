@extends('layouts.admin')
@section('table')
<thead>
        <tr>
                <th>#</th>
                <th>Name</th>
                <th>Song</th>
                <th>Photo</th>
                <th>Rate</th>
                <th>Duration</th>
                <th>Album</th>
                <th>Artist</th>
                <th>Genre</th>
        </tr>
</thead>

<tbody>
    @foreach($songs as $song)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $song->name }}</td>
        <td>{{ $song->song }}</td>
        <td>
            <button type="button" id="showPicture" class="btn showPicture" data-toggle="modal" data-target="#exampleModalCenter" data-bind="{{ asset('photo/songs/'.$song->photo) }}">
                Show
            </button>
        </td>
        <td>
            {{ $song->rate }}
        </td>
        <td>
           {{ round($song->duration/60) }} : {{ ($song->duration)%60 }}
        </td>
        <td>
            {{ $song->artist->name }}
        </td>
        <td>
            {{ $song->album->name }}
        </td>
        <td>
            {{ $song->genre->name }}
        </td>
       <td>
            <form id="song_delete" data-target="songs" class="delete" action="#">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" id="id" name="id" value="{{ $song->id }}">
                <button type="submit" class="btn" id="deleteBtn">Delete</button>
            </form>
        </td>
        <td>
            <a  href="songs/edit/{{ $song->id }}"><button type="button" class="btn">Edit</button></a>
        </td>
    </tr>
    @endforeach
</tbody>
<a href="songs/add"><button type="button" class="btn btn-primary" id="">Add new song</button></a>
@endsection



