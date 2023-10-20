@extends('admin.layouts.master')
@section('title', ' portfolio')
@section('container')
    <div class="main-panel-profile">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    <span class="page-title-icon bg-gradient-primary text-white me-2">
                        <i class=" mdi mdi-group "></i>
                    </span> Portfolio
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
            <div class="card">
                <div class="card-body">
                    <div style="width: 100%; display: flex; justify-content: space-between">
                        <h4 class="card-title">Cortfolio List</h4>
                        <a href="{{ route('admin.portfolio.create') }}" class="btn btn-gradient-success btn-fw">Create</a>
                    </div>

                    <div class="card-body">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Url</th>
                                    <th>Category Id</th>
                                    <th>status</th>
                                    <th>Setting</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Portfolios as $Portfolio)
                                    <tr>
                                        <td>{{ $Portfolio->id }}</td>

                                        <td>{{ $Portfolio->title }}</td>
                                        <td><img src="{{ asset($Portfolio->image) }}" alt=""></td>
                                        <td><a href="{{ $Portfolio->url }}" class="text-primary" target="_blank">Click for
                                                redirect</a></td>
                                        <td >
                                            <span class="@if ($Portfolio->category->status == 0) bg-danger @else bg-success @endif  p-2 text-white rounded"  >{{ $Portfolio->category->name }}</span></td>

                                        <td>
                                            @if ($Portfolio->status == 1)
                                                <label class="badge badge-success"> Active</label>
                                            @else
                                                <label class="badge badge-warning">In Active</label>
                                            @endif
                                        </td>
                                        <td>

                                            <a href="{{ route('admin.portfolio.edit', $Portfolio->id) }}"
                                                class="btn btn-gradient-primary btn-sm btn-fw">Edit</a>


                                            <form action="{{ route('admin.portfolio.destroy', $Portfolio->id) }}"
                                                method="POST" style="display: inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="btn btn-gradient-danger btn-sm btn-fw ">delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
