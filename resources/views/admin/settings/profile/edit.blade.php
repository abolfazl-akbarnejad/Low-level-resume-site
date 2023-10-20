@extends('admin.layouts.master')
@section('title', 'edit pofile')
@section('container')
    <div class="main-panel-profile">
        <div class="content-wrapper">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Profile</h4>
                        <form class="forms-sample" action="{{ route('admin.setting.profile.update') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="exampleInputName1">Name</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name"
                                    name="name" value="{{ old('name', $profileSetting->name) }}">
                                @error('name')
                                    <span class="text-primary text-danger ">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">workPakage</label>
                                <input type="text" class="form-control" id="exampleInputEmail3" placeholder="workPakage"
                                    name="workPakage" value="{{ old('workPakage', $profileSetting->workPakage) }}">
                                @error('workPakage')
                                    <span class="text-primary text-danger ">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">dateBirth</label>
                                <input type="text" class="form-control" id="exampleInputEmail3" placeholder="dateBirth"
                                    name="dateBirth" value="{{ old('dateBirth', $profileSetting->dateBirth) }}">
                                @error('dateBirth')
                                    <span class="text-primary text-danger ">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea1">biography</label>
                                <textarea name="biography" class="form-control" id="exampleTextarea1" rows="4">{{ old('biography', $profileSetting->biography) }}</textarea>
                                @error('biography')
                                    <span class="text-primary text-danger ">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>my image</label>
                                <div class="input-group col-xs-12">
                                    <input type="file" class="form-control file-upload-info" placeholder="Upload Image"
                                        name="profileImage">
                                    <span class="input-group-append">

                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>backgrand image</label>
                                <div class="input-group col-xs-12">
                                    <input type="file" class="form-control file-upload-info" placeholder="Upload Image"
                                        name="mainImage">
                                    <span class="input-group-append">

                                    </span>
                                </div>
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
