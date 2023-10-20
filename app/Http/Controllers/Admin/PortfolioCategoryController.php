<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePortfolioCategoryRequest;
use App\Models\PortfolioCategory;
use Illuminate\Http\Request;

class PortfolioCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = PortfolioCategory::orderBy('id', 'desc')->get();

        return view('admin.portfolios.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.portfolios.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePortfolioCategoryRequest $request)
    {
        PortfolioCategory::create($request->all());

        return redirect()->route('admin.portfolio.category.index');
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
    public function edit($id)
    {
        $category = PortfolioCategory::find($id);
        if ($category) {
            return view('admin.portfolios.category.edit', compact('category'));
        } else {
            return redirect()->route('admin.portfolio.category.index');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePortfolioCategoryRequest $request, $id)
    {
        $category = PortfolioCategory::find($id);

        if ($category) {
            $category->update($request->all());

            return redirect()->route('admin.portfolio.category.index');
        } else {
            return redirect()->route('admin.portfolio.category.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if ($id) {
            $category = PortfolioCategory::find($id);
            if ($category->portfolios->count() == 0) {
                $category->delete();
            } else {
                return redirect()->route('admin.portfolio.category.index')->with('error', 'As long as the sample is in this category, it will not be deleted');
                // with('error', 'There should be no portfolios in this category to be deleted');
            }

            return redirect()->route('admin.portfolio.category.index')->with('success', 'Category deleted successfully');


        } else {
            return redirect()->route('admin.portfolio.category.index');
        }
    }
}