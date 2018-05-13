@extends('layouts.admin')
@section('table')
    <form action="{{ route('genre_add') }}" method="POST"  enctype="multipart/form-data">
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

            <div class="form-group row {{ $errors->has('description') ? ' has-error' : '' }}">
            <label for="textArea" class="col-sm-3 control-label">Description</label>
                <div class="col-sm-9">
                    <textarea name="description" class="form-control" rows="3" id="textArea">{{ old('description') }}</textarea>
                    @if($errors->has('description'))
                    <span class="help-block">{{ $errors->first('description') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
            <div class="col-sm-6">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
      </div>
        <div class="col-sm-4 {{ $errors->has('photo') ? ' has-error' : '' }}">
            <input name="photo" class="form-control" value="{{ old('photo') }}" type="file" accept="image/*">
             @if($errors->has('photo'))
                <span class="help-block">{{ $errors->first('photo') }}</span>
             @endif
        </div>   
    </form>
@endsection
