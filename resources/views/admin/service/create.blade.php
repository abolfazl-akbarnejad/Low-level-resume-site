@extends('admin.layouts.master')
@section('title', 'create Service ')
@section('container')
    <div class="main-panel-profile">
        <div class="content-wrapper">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create Service </h4>
                        <form class="forms-sample" action="{{ route('admin.service.store') }}" method="POST"
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
                                <label for="exampleInputEmail3">Icon</label>
                                <input type="file" class="form-control" id="exampleInputEmail3"
                                    placeholder="Enter calss icon" name="icon" value="{{ old('icon') }}">

                                @error('icon')
                                    <span class="text-primary text-danger ">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail3">discription</label>
                                {{-- <input type="number" class="form-control" id="exampleInputEmail3"
                                    placeholder="Enter calss icon" name="icon" value="{{ old('icon') }}"> --}}

                                <textarea name="discription" class="form-control" id="exampleInputEmail3" cols="30" rows="5">{{ old('discription') }}</textarea>

                                @error('discription')
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
