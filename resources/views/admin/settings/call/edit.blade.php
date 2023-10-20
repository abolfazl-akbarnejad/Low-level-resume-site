@extends('admin.layouts.master')
@section('title', 'edit call')
@section('container')
    <div class="main-panel-profile">
        <div class="content-wrapper">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Call</h4>
                        <form class="forms-sample" action="{{ route('admin.setting.call.update') }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="exampleInputName1">Phone Number</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="phonenumber"
                                    name="phonenumber" value="{{ old('phonenumber', $callSetting->phonenumber) }}">
                                @error('phonenumber')
                                    <span class="text-primary text-danger ">{{ $message }}</span>
                                @enderror


                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail3" placeholder="email"
                                    name="email" value="{{ old('email', $callSetting->email) }}">
                                @error('email')
                                    <span class="text-primary text-danger ">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Adress</label>
                                <input type="text" class="form-control" id="exampleInputEmail3" placeholder="addres"
                                    name="addres" value="{{ old('addres', $callSetting->addres) }}">
                                @error('addres')
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
