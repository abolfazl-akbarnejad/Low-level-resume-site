@extends('admin.layouts.master')
@section('title', 'call')
@section('container')
    <div class="main-panel-profile">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    <span class="page-title-icon bg-gradient-primary text-white me-2">
                        <i class="mdi mdi-phone "></i>
                    </span> Call
                </h3>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">
                            <span></span>Overview <i
                                class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Recent Tickets</h4>
                            <div class="table-responsive">
                                <table class="table">

                                    <tr>
                                        <th> phone number </th>
                                        <td>{{ $callSetting->phonenumber }}</td>
                                    </tr>
                                    <tr>
                                        <th> email </th>
                                        <td>{{$callSetting->email}}</td>
                                    </tr>
                                    <tr>
                                        <th> addres </th>
                                        <td>{{ $callSetting->addres }}</td>
                                    </tr>




                                </table>
                                <a href="{{ route('admin.setting.call.edit') }}"
                                    class="btn btn-inverse-info btn-fw mt-4">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Description</h4>
                            <div class="d-flex">
                                <div class="d-flex align-items-center me-4 text-muted font-weight-light">
                                    <i class="mdi mdi-account-outline icon-sm me-2"></i>
                                    <span>jack Menqu</span>
                                </div>
                                <div class="d-flex align-items-center text-muted font-weight-light">
                                    <i class="mdi mdi-clock icon-sm me-2"></i>
                                    <span>October 3rd, 2018</span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-6 pe-1">
                                    <img src="assets/images/dashboard/img_1.jpg" class="mb-2 mw-100 w-100 rounded"
                                        alt="image">
                                    <img src="assets/images/dashboard/img_4.jpg" class="mw-100 w-100 rounded"
                                        alt="image">
                                </div>
                                <div class="col-6 ps-1">
                                    <img src="assets/images/dashboard/img_2.jpg" class="mb-2 mw-100 w-100 rounded"
                                        alt="image">
                                    <img src="assets/images/dashboard/img_3.jpg" class="mw-100 w-100 rounded"
                                        alt="image">
                                </div>
                            </div>
                            <div class="d-flex mt-5 align-items-top">
                                <img src="assets/images/faces/face3.jpg" class="img-sm rounded-circle me-3" alt="image">
                                <div class="mb-0 flex-grow">
                                    <h5 class="me-2 mb-2">School Website - Authentication Module.</h5>
                                    <p class="mb-0 font-weight-light">It is a long established fact that a reader
                                        will be distracted by the readable content of a page.</p>
                                </div>
                                <div class="ms-auto">
                                    <i class="mdi mdi-heart-outline text-muted"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->

        <!-- partial -->
    </div>
@endsection
