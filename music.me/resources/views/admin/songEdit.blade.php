@extends('layouts.admin')
@section('table')
    <form action="{{ route('song_edit', ['id' => $song->id]) }}" method="POST" class="editArtist"  enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="col-sm-8">
            
            <div class="form-group row {{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-9">
                    <input type="name" name="name" class="form-control" id="inputEmail3" value="{{ $song->name }}" placeholder="Name">
                      @if($errors->has('name'))
                    <span class="help-block">{{ $errors->first('name') }}</span>
                    @endif
                </div>
            </div>
            
            <div class="form-group row {{ $errors->has('song') ? ' has-error' : '' }}">
                <label for="song" class="col-sm-3 col-form-label">Song</label>
                <div class="col-sm-9">
                    <input type="file" accept="audio/*" value="{{ $song->song }}" name="song" class="form-control">
                      @if($errors->has('song'))
                    <span class="help-block">{{ $errors->first('song') }}</span>
                    @endif
                </div>
            </div>
            
            <div class="form-group row {{ $errors->has('rate') ? ' has-error' : '' }}">
                <label for="rate" class="col-sm-3 col-form-label">Rate</label>
                <div class="col-sm-9">
                    <input type="name" name="rate" class="form-control" id="rate" value="{{ $song->rate }}" placeholder="Rate">
                      @if($errors->has('rate'))
                    <span class="help-block">{{ $errors->first('rate') }}</span>
                    @endif
                </div>
            </div>

             <div class="form-group row">
                <label for="genre" class="col-sm-3 col-form-label">Genre</label>
                <div class="col-sm-9">
                    <select name="genre" class="custom-select">
                        <option disabled selected>Choose Genre</option>
                        @foreach($genres as $genre)
                            @if($genre->id == $song->genre_id)
                            <option value="{{$genre->id}}" selected="">
                            @else
                             <option value="{{$genre->id}}">
                            @endif
                            {{ $genre->name }}</option>
                        @endforeach
                     </select>
                </div>
            </div>
            <div class="form-group row"> 
                <label for="album" class="col-sm-3 col-form-label">Album</label>
                <div class="col-sm-9">
                    <select name="album" class="custom-select">
                       <option disabled selected>Choose Album</option>
                       @foreach($albums as $album)
                       @if($album->id == $song->album_id)
                        <option value="{{$album->id}}" selected="">
                        @else
                         <option value="{{$album->id}}">
                        @endif
                       {{ $album->name }}</option>
                       @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row"> 
                <label for="artist" class="col-sm-3 col-form-label">Artist</label>
                <div class="col-sm-9">
                    <select name="artist" class="custom-select">
                       <option disabled selected>Choose Artists</option>
                       @foreach($artists as $artist)
                       @if($artist->id == $song->artist_id)
                        <option value="{{$artist->id}}" selected="">
                        @else
                        <option value="{{$artist->id}}">
                        @endif
                       {{ $artist->name }}</option>
                       @endforeach
                    </select>
                </div>
            </div>
            
            <div class="form-group row">
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
      </div>
        <div class="col-sm-4">
            <img src="{{ asset('photo/songs/'.$song->photo) }}">
            <div class="form-group row {{ $errors->has('photo') ? ' has-error' : '' }}">
                <label for="photo" class="col-sm-3 col-form-label">Photo</label>
                <div class="col-sm-9">
                    <input name="photo" class="form-control" type="file" value="{{ $song->photo }}" accept="image/*">
                      @if($errors->has('photo'))
                    <span class="help-block">{{ $errors->first('photo') }}</span>
                    @endif
                </div>
            </div>     
        </div>   
    </form>
@endsection


