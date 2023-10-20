@extends('admin.layouts.master')
@section('title', 'edit Social media ')
@section('container')
    <div class="main-panel-profile">
        <div class="content-wrapper">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Social media </h4>
                        <form class="forms-sample" action="{{ route('admin.socialMedia.update' , $socialMedia->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="exampleInputName1">Name</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Nick name"
                                    name="name" value="{{ old('name' , $socialMedia->name) }}">
                                @error('name')
                                    <span class="text-primary text-danger ">{{ $message }}</span>
                                @enderror


                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Icon</label>
                                <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Icone"
                                    name="icon" value="{{ old('icon' , $socialMedia->icon) }}">
                                <a href="{{ url('https://www.w3schools.com/icons/icons_reference.asp') }}" class="mt-2" target="_blank">
                                    Choose icons from this section (fa) Like: fa-twitter</a>
                                @error('icon')
                                    <span class="text-primary text-danger ">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">URL</label>
                                <input type="text" class="form-control" id="exampleInputEmail3" placeholder="URL website"
                                    name="url" value="{{ old('url' , $socialMedia->url) }}">
                                @error('url')
                                    <span class="text-primary text-danger ">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Status</label>
                                <select class="form-select" aria-label="Default select example" name="status">
                                    <option value="0" @if (old('status' , $socialMedia->status) == 0) selected @endif>Inactive
                                    </option>

                                    <option value="1" @if (old('status' , $socialMedia->status) == 1) selected @endif>Active
                                    </option>

                                </select>
                            </div>


                            <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
