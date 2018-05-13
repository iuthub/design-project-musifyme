@extends('layouts.admin')
@section('table')
    <form action="{{ route('artist_edit', ['id' => $artist->id]) }}" method="POST" class="editArtist"  enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="col-sm-8">
            <div class="form-group row {{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="inputEmail3" class="col-sm-3 col-form-label">Name</label>
            <div class="col-sm-9">
                <input type="name" name="name" class="form-control" id="inputEmail3" value="{{$artist->name}}" placeholder="Name">
                 @if($errors->has('name'))
                <span class="help-block">{{ $errors->first('name') }}</span>
                @endif
            </div>
            </div>

            <div class="form-group row {{ $errors->has('biography') ? ' has-error' : '' }}">
            <label for="textArea" class="col-sm-3 control-label">Biography</label>
                <div class="col-sm-9">
                    <textarea name="biography" class="form-control" rows="3" id="textArea">{{$artist->biography}}</textarea>
                </div>
                @if($errors->has('biography'))
                <span class="help-block">{{ $errors->first('biography') }}</span>
                @endif
            </div>
      
            <div class="form-group row {{ $errors->has('quote') ? ' has-error' : '' }}">
            <label for="inputEmail3" class="col-sm-3 col-form-label">Quote</label>
            <div class="col-sm-9">
                <input type="name" name="quote" class="form-control" id="inputEmail3" value="{{$artist->quote}}" placeholder="Name">
                @if($errors->has('quote'))
                <span class="help-block">{{ $errors->first('quote') }}</span>
                @endif
            </div>
            </div>
            
            <div class="form-group row {{ $errors->has('genre') ? ' has-error' : '' }}">
            <select name="genre" class="custom-select" multiple="">
                <option disabled selected>Choose Genres</option>
                @foreach($genres as $genre)
                    @if($genre->id == $artist->genre_id)
                    <option value="{{$genre->id}}" selected="">
                    @else
                     <option value="{{$genre->id}}">
                    @endif
                    {{ $genre->name }}</option>
                @endforeach
             </select>
                 @if($errors->has('genre'))
                <span class="help-block">{{ $errors->first('genre') }}</span>
                @endif
            </div>
            
            <div class="form-group row">
            <div class="col-sm-6">
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
            </div>
        </div>
        <div class="col-sm-4 {{ $errors->has('photo') ? ' has-error' : '' }}">
             <img src="{{ asset('photo/artists/'.$artist->photo) }}" class="img_edit"/>
             
             <div class="custom-file">
                 <input type="file" name="photo" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
              @if($errors->has('photo'))
                <span class="help-block">{{ $errors->first('photo') }}</span>
                @endif
        </div>
    </form>
@endsection

