@extends('admin.layouts.master')
@section('style')
    <link rel="stylesheet" href="{{ asset('admin/assets/alerts/sweetalert2.min.css') }}">
@endsection
@section('title', 'categoey portfolio')
@section('container')
    <div class="main-panel-profile">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    <span class="page-title-icon bg-gradient-primary text-white me-2">
                        <i class=" mdi mdi-group "></i>
                    </span> Cortfolio Category
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
                        <h4 class="card-title">Cortfolio Category List</h4>
                        <a href="{{ route('admin.portfolio.category.create') }}"
                            class="btn btn-gradient-success btn-fw">Create</a>
                    </div>

                    <div class="card-body">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>count portfolios</th>
                                    <th>Status</th>
                                    <th>Setting</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>

                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->portfolios->count() }}</td>

                                        <td>
                                            @if ($category->status == 1)
                                                <label class="badge badge-success"> Active</label>
                                            @else
                                                <label class="badge badge-warning">In Active</label>
                                            @endif
                                        </td>
                                        <td>

                                            <a href="{{ route('admin.portfolio.category.edit', $category->id) }}"
                                                class="btn btn-gradient-primary btn-sm btn-fw">Edit</a>


                                            <form action="{{ route('admin.portfolio.category.destroy', $category->id) }}"
                                                method="POST" style="display: inline-block" class="delete-form">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="btn btn-gradient-danger btn-sm btn-fw ">delete</button>
                                            </form>
                                        </td>





                                        </body>

                                        </html>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.alerts.sweetalert.error')
    @include('admin.alerts.sweetalert.success')
@endsection
