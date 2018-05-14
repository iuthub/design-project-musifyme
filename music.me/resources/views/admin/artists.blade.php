@extends('layouts.admin')
@section('table')
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
<a href="artists/add"><button type="button" class="btn btn-primary" id="">Add new artist</button></a>
@endsection

