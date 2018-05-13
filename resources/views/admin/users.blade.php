@extends('layouts.admin')

@section('table')
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

@endsection

