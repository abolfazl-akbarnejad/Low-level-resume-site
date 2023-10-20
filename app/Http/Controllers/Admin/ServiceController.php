<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServiceRequest;
use App\Models\Services;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Services::orderBy('id', 'desc')->get();

        return view('admin.service.index', compact('services'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        $inputs = $request->all();
        // dd( $request->file('icon ')->getClientOriginalName());
        // dd(explode('.', $request->file('icon ')->getClientOriginalName()));

        if ($request->hasFile('icon')) {
            $PathFile = 'admin' . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR;
            $NameFile = time() . '.' . explode('.', $request->file('icon')->getClientOriginalName())[1];
            ImageManagerStatic::make($request->file('icon')->getRealPath())->save(public_path($PathFile . $NameFile));
            $inputs['icon'] = $PathFile . $NameFile;
        }

        Services::create($inputs);

        return redirect()->route('admin.service.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Services $service)
    {
        // $sevice = Services::find($id);
        if ($service) {

            return view('admin.service.edit', compact('service'));
        } else {
            return redirect()->route('admin.service.index');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreServiceRequest $request, Services $service)
    {
        if ($service) {
            $inputs = $request->all();

            if ($request->hasFile('icon')) {
                $PathFile = 'assets' . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'service' . DIRECTORY_SEPARATOR;
                $NameFile = time() . '.' . explode('.', $request->file('icon')->getClientOriginalName())[1];
                ImageManagerStatic::make($request->file('icon')->getRealPath())->save(public_path($PathFile . $NameFile));
                if (file_exists(public_path($service->icon))) {
                    unlink(public_path($service->icon));
                }
                $inputs['icon'] = $PathFile . $NameFile;
            }
            $service->update($inputs);
            return redirect()->route('admin.service.index');
        } else {
            return redirect()->route('admin.service.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $services = Services::find($id);
        if ($services) {
            $services->delete();
            unlink(public_path($services->icon));
        } else {
            return redirect()->route('admin.service.index');
        }
        return redirect()->route('admin.service.index');

    }
}