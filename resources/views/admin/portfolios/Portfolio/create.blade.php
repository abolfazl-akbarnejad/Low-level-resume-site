@extends('admin.layouts.master')
@section('title', 'create portfolio ')
@section('container')
    <div class="main-panel-profile">
        <div class="content-wrapper">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create portfolio </h4>
                        <form class="forms-sample" action="{{ route('admin.portfolio.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputName1">Title</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="title"
                                    name="title" value="{{ old('title') }}">
                                @error('title')
                                    <span class="text-primary text-danger ">{{ $message }}</span>
                                @enderror


                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Image</label>
                                <input type="file" class="form-control" id="exampleInputName1" placeholder="image"
                                    name="image">
                                @error('image')
                                    <span class="text-primary text-danger ">{{ $message }}</span>
                                @enderror


                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Url</label>
                                <input type="text" class="form-control" id="exampleInputName1"
                                    placeholder="https://www.google.com" name="url" value="{{ old('url') }}">
                                @error('url')
                                    <span class="text-primary text-danger ">{{ $message }}</span>
                                @enderror


                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail3">category ID</label>
                                <select class="form-select" aria-label="Default select example" name="cat_id">

                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            @if (old('cat_id') == $category->id) selected @endif
                                            class="@if ($category->status == 0) text-warning @else text-success @endif h4">
                                            {{ $category->name }}

                                        </option>
                                    @endforeach

                                </select>
                                @error('cat_id')
                                    <span class="text-primary text-danger ">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Status</label>
                                <select class="form-select" aria-label="Default select example" name="status">
                                    <option value="0" @if (old('status') == 0) selected @endif>Inactive
                                    </option>

                                    <option value="1" @if (old('status') == 1) selected @endif>Active
                                    </option>

                                </select>
                                @error('status')
                                    <span class="text-primary text-danger ">{{ $message }}</span>
                                @enderror
                            </div>


                            <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                            {{-- <button class="btn btn-light">Cancel</button> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
