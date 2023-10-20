@extends('admin.layouts.master')
@section('title', 'edit portfolio Category ')
@section('container')
    <div class="main-panel-profile">
        <div class="content-wrapper">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit portfolio Category </h4>
                        <form class="forms-sample" action="{{ route('admin.portfolioCategory.update', $category->id) }}"
                            method="POST">

                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputName1">Name</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="name"
                                    name="name" value="{{ old('name', $category->name) }}">
                                @error('name')
                                    <span class="text-primary text-danger ">{{ $message }}</span>
                                @enderror


                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail3">Status</label>
                                <select class="form-select" aria-label="Default select example" name="status">
                                    <option value="0" @if (old('status', $category->status) == 0) selected @endif>Inactive
                                    </option>

                                    <option value="1" @if (old('status', $category->status) == 1) selected @endif>Active
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
