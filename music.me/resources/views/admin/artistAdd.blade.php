@extends('layouts.admin')
@section('table')
    <form action="{{ route('artist_add') }}" method="POST"  enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="col-sm-8">
            <div class="form-group row {{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="inputEmail3" class="col-sm-3 col-form-label">Name</label>
            <div class="col-sm-9">
                <input type="name" name="name" class="form-control" id="inputEmail3" value="{{ old('name') }}" placeholder="Name">
                @if($errors->has('name'))
                <span class="help-block">{{ $errors->first('name') }}</span>
                @endif
            </div>
            </div>
            
            <div class="form-group row {{ $errors->has('quote') ? ' has-error' : '' }}">
            <label for="inputEmail3" class="col-sm-3 col-form-label">Quote</label>
            <div class="col-sm-9">
                <input type="name" name="quote" class="form-control" id="inputEmail3" value="{{ old('quote') }}" placeholder="Quote">
                @if($errors->has('quote'))
                <span class="help-block">{{ $errors->first('quote') }}</span>
                @endif
            </div>
            </div>

            <div class="form-group row {{ $errors->has('biography') ? ' has-error' : '' }}">
            <label for="textArea" class="col-sm-3 control-label">Biography</label>
                <div class="col-sm-9">
                    <textarea name="biography" class="form-control" rows="3" id="textArea">{{ old('biography') }}</textarea>
                    @if($errors->has('biography'))
                    <span class="help-block">{{ $errors->first('biography') }}</span>
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
            <div class="form-group row {{ $errors->has('photo') ? ' has-error' : '' }}">
            <input name="photo" class="form-control" type="file" accept="image/*">
            @if($errors->has('photo'))
            <span class="help-block">{{ $errors->first('photo') }}</span>
            @endif
            </div>
            <div class="form-group row {{ $errors->has('genre') ? ' has-error' : '' }}">
            <select name="genre" class="custom-select" multiple="">
                <option disabled selected>Choose Genres</option>
                @foreach($genres as $genre)
                <option value="{{$genre->id}}">{{ $genre->name }}</option>
                @endforeach
             </select>
            @if($errors->has('genre'))
            <span class="help-block">{{ $errors->first('genre') }}</span>
            @endif
            </div>
        </div>   
    </form>
@endsection


