@extends('layouts.admin')
@section('table')
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
<a href="genres/add"><button type="button" class="btn btn-primary" id="">Add new genre</button></a>
@endsection
