<?php

namespace App\Http\Controllers\Admin\Catalog;

use App\Http\Controllers\Admin\IndexController;
use App\Http\Requests\CategoryFormRequest;
use App\Models\Catalog\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class CategoryController
 * @package App\Http\Controllers\Admin\Catalog
 */
class CategoryController extends IndexController
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->user = Auth::user();
        $data['nav']['menu'] = parent::menu();

        $data['content']['categories'] = Category::all();

        $this->template = 'admin_page/catalog/category/index';

        return $this->renderOutput($data);
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param Category $category
     * @return string
     */
    public function edit(Category $category)
    {
        $this->user = Auth::user();
        $data['nav']['menu'] = parent::menu();

        $data['content']['category'] = $category;

        $this->template = 'admin_page/catalog/category/edit';

        return $this->renderOutput($data);
    }

    /**
     * Update the specified resource in storage.
     * @param CategoryFormRequest $request
     * @param Category $category
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CategoryFormRequest $request, Category $category)
    {
        $category->update($request->all());

        return redirect()
            ->route('admin.catalog.categories.index', [$category]);
    }

    /**
     * Remove the specified resource from storage.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
