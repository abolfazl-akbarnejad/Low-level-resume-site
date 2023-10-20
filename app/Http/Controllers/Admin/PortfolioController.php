<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePortfolioRequest;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $Portfolios = Portfolio::orderBy('id', 'desc')->get();
        return view('admin.Portfolios.Portfolio.index', compact('Portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = PortfolioCategory::orderBy('id', 'desc')->get();
        return view('admin.Portfolios.Portfolio.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePortfolioRequest $request)
    {
        if ($request->hasFile('image')) {
            $inputs = $request->all();
            $pathFile = 'assets' . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'portfolios' . DIRECTORY_SEPARATOR;
            $nameFile = time() . '.' . explode('.', $request->file('image')->getClientOriginalName())[1];
            ImageManagerStatic::make($request->file('image')->getRealPath())->save($pathFile . $nameFile);
            $inputs['image'] = $pathFile . $nameFile;
            Portfolio::create($inputs);
            return redirect()->route('admin.portfolio.index');
        }
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
    public function edit(string $id)
    {
        $Portfolio = Portfolio::find($id);
        $categories = PortfolioCategory::orderBy('id', 'desc')->get();
        if ($Portfolio) {
            return view('admin.Portfolios.Portfolio.edit', compact('Portfolio', 'categories'));
        } else {
            return redirect()->route('admin.portfolio.index');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $portfolio = Portfolio::find($id);
        if ($portfolio) {
            $inputs = $request->all();
            if ($request->hasFile('image')) {
                $pathFile = 'assets' . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'portfolios' . DIRECTORY_SEPARATOR;
                $nameFile = time() . '.' . explode('.', $request->file('image')->getClientOriginalName())[1];
                ImageManagerStatic::make($request->file('image')->getRealPath())->save($pathFile . $nameFile);
                unlink(public_path($portfolio->image));
                $inputs['image'] = $pathFile . $nameFile;
            }
            $portfolio->update($inputs);
            return redirect()->route('admin.portfolio.index');
        } else {
            return redirect()->route('admin.portfolio.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $portfolio = Portfolio::find($id);
        if ($portfolio) {
            $portfolio->delete();
            unlink(public_path($portfolio->image));
        } else {
            return redirect()->route('admin.portfolio.index');
        }
        return redirect()->route('admin.portfolio.index');

    }
}