@extends('layouts.admin')
@section('table')
    <form action="{{ route('album_edit', ['id' => $album->id]) }}" method="POST"  enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="col-sm-8">
            
            <div class="form-group row {{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-9">
                    <input type="name" name="name" class="form-control" id="inputEmail3" value="{{ $album->name }}" placeholder="Name">
                     @if($errors->has('name'))
                    <span class="help-block">{{ $errors->first('name') }}</span>
                    @endif
                </div>
            </div>
             <div class="form-group row {{ $errors->has('artist') ? ' has-error' : '' }}"> 
                <label for="artist" class="col-sm-3 col-form-label">Artist</label>
                <div class="col-sm-9">
                    <select name="artist" class="custom-select">
                       <option disabled selected>Choose Artists</option>
                       @foreach($artists as $artist)
                       @if($artist->id == $album->artist_id)
                        <option value="{{$artist->id}}" selected="">
                        @else
                        <option value="{{$artist->id}}">
                        @endif
                       {{ $artist->name }}</option>
                       @endforeach
                    </select>
                     @if($errors->has('artist'))
                    <span class="help-block">{{ $errors->first('artist') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
      </div>
        <div class="col-sm-4">
            <img class="adminImg" src="{{ asset('photo/albums/'.$album->photo) }}">
            <div class="form-group row {{ $errors->has('photo') ? ' has-error' : '' }}">
                <label for="photo" class="col-sm-3 col-form-label">Photo</label>
                <div class="col-sm-9">
                    <input name="photo" value="{{ $album->photo }}" class="form-control" type="file" accept="image/*">
                     @if($errors->has('photo'))
                    <span class="help-block">{{ $errors->first('photo') }}</span>
                    @endif
                </div>
            </div> 
        </div>   
    </form>
@endsection




