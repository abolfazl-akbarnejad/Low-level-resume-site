@extends('admin.layouts.master')
@section('title', 'Service')
@section('container')
    <div class="main-panel-profile">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    <span class="page-title-icon bg-gradient-primary text-white me-2">
                        <i class=" mdi mdi-star"></i>
                    </span> Service
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
                        <h4 class="card-title">Service List</h4>
                        <a href="{{ route('admin.Service.create') }}" class="btn btn-gradient-success btn-fw">Create</a>
                    </div>

                    <div class="card-body">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>title</th>
                                    <th>icon</th>
                                    <th>discription</th>
                                    <th>Status</th>
                                    <th>Setting</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $service)
                                    <tr>
                                        <td>{{ $service->id }}</td>
                                        {{-- {{dd($service)}} --}}

                                        <td>{{ $service->title }}</td>
                                        <td><img src="{{ asset($service->icon) }}" alt=""
                                                style="border-radius: 0% ;"></td>
                                        <td class="w-50" style="width: auto; height: auto; white-space: normal;">{{ $service->discription }}</td>


                                        <td>
                                            @if ($service->status == 1)
                                                <label class="badge badge-success"> Active</label>
                                            @else
                                                <label class="badge badge-warning">In Active</label>
                                            @endif
                                        </td>
                                        <td>

                                            <a href="{{ route('admin.service.edit', $service->id) }}"
                                                class="btn btn-gradient-primary btn-sm btn-fw">Edit</a>


                                            <form action="{{ route('admin.service.destroy', $service->id) }}" method="POST"
                                                style="display: inline-block">
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
