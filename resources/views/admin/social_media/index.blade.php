@extends('admin.layouts.master')
@section('title', 'social media')

@section('container')
    <div class="main-panel-profile">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    <span class="page-title-icon bg-gradient-primary text-white me-2">
                        <i class=" mdi mdi-telegram"></i>
                    </span> Social media
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
                            <div style="width: 100%; display: flex; justify-content: space-between">
                                <h4 class="card-title">Social Media List</h4>
                                <a href="{{ route('admin.socialMedia.create') }}"
                                    class="btn btn-gradient-success btn-fw">Create</a>
                            </div>

                            <div class="card-body">

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Icon</th>
                                            <th>Name</th>
                                            <th>URL</th>
                                            <th>Status</th>
                                            <th>Setting</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($socialMedia as $media)
                                            <tr>
                                                <td>{{ $media->id }}</td>
                                                <td> <i class="mdi mdi-{{ $media->icon }}"></i></td>

                                                <td>{{ $media->name }}</td>
                                                <td><a href="{{ url($media->url) }}" target="_blank">Click me</a></td>
                                                <td>
                                                    @if ($media->status == 1)
                                                        <label class="badge badge-success"> Active</label>
                                                    @else
                                                        <label class="badge badge-warning">In Active</label>
                                                    @endif
                                                </td>
                                                <td>

                                                    <a href="{{ route('admin.socialMedia.edit', $media->id) }}"
                                                        class="btn btn-gradient-primary btn-sm btn-fw">Edit</a>


                                                    <form action="{{ route('admin.socialMedia.destroy', $media->id) }}"
                                                        method="POST" style="display: inline-block">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn btn-gradient-danger btn-sm btn-fw ">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endsection
