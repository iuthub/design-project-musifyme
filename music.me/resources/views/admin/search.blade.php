@extends('layouts.admin')
@section('table')
@if(!empty($users->first()))
<h4>Result: Users</h4>
<thead>
        <tr>
                <th>#</th>
                <th>E-mail</th>
                <th>Name</th>
                <th>Photo</th>
        </tr>
</thead>

<tbody>
    @foreach($users as $user)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->name }}</td>
        <td>
         <button type="button" id="showPicture" class="btn showPicture" data-toggle="modal" data-target="#exampleModalCenter" data-bind="{{ asset('photo/users/'.$user->photo) }}">
                Show
            </button></td>
       
        <td>
            <form id="user_delete" data-target="users" class="delete" action="#">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" id="id" name="id" value="{{ $user->id }}">
                <button type="submit" class="btn delete_user" id="delete_user">Delete</button>
            </form>
        </td>
       
    </tr>
    @endforeach
</tbody>
@endif

@if(!empty($genres->first()))
<h4>Result: Genres</h4>
<thead>
        <tr>
                <th>#</th>
                <th>Name</th>
                <th>Description</th>
                <th>Photo</th>
        </tr>
</thead>

<tbody>
    @foreach($genres as $genre)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $genre->name }}</td>
        <td>{{ $genre->description }}</td>
        <td><span>{{ $genre->photo }}</span></td>
        <td>
            <button type="button" id="showPicture" class="btn showPicture" data-toggle="modal" data-target="#exampleModalCenter" data-bind="{{ asset('photo/genres/'.$genre->photo) }}">
                Show
            </button>
        </td>
        <td>
            <form id="genre_delete" data-target="genres" class="delete" action="#">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" id="id" name="id" value="{{ $genre->id }}">
                <button type="submit" class="btn" id="deleteBtn">Delete</button>
            </form>
        </td>
        <td>
            <a  href="genres/edit/{{ $genre->id }}"><button type="button" class="btn">Edit</button></a>
        </td>
    </tr>
    @endforeach
</tbody>
@endif

@if(!empty($albums->first()))
<h4>Result: Albums</h4>
<thead>
        <tr>
                <th>#</th>
                <th>Name</th>
                <th>Photo</th>
                <th>Artist</th>
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
@endif

@if(!empty($artists->first()))
<h4>Result: Artists</h4>
<thead>
        <tr>
                <th>#</th>
                <th>Name</th>
                <th>Biography</th>
                <th>Photo</th>
                <th>Quote</th>
                <th>Genres</th>
        </tr>
</thead>

<tbody>
    @foreach($artists as $artist)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $artist->name }}</td>
        <td>{{ $artist->biography }}</td>
        <td>
            <button type="button" id="showPicture" class="btn showPicture" data-toggle="modal" data-target="#exampleModalCenter" data-bind="{{ asset('photo/artists/'.$artist->photo) }}">
                Show
            </button>
        </td>
        <td>
            {{ $artist->quote }}
        </td>
        <td>
            @foreach($artist->genres as $genre)
                {{ $genre->name }},
            @endforeach
        </td>
       <td>
            <form id="artist_delete" data-target="artists" class="delete" action="#">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" id="id" name="id" value="{{ $artist->id }}">
                <button type="submit" class="btn" id="deleteBtn">Delete</button>
            </form>
        </td>
        <td>
            <a  href="artists/edit/{{ $artist->id }}"><button type="button" class="btn">Edit</button></a>
        </td>
    </tr>
    @endforeach
</tbody>
@endif

@if(!empty($songs->first()))
<h4>Result: Songs</h4>
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
@endif
@endsection

