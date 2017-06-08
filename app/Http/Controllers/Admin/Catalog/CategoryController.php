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
        view()->share('menu', parent::menu());

        $categories = Category::orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->get();

        return view('admin_page.catalog.category.index', [
            'categories' => $categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        view()->share('menu', parent::menu());

        return view('admin_page.catalog.category.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param CategoryFormRequest $request
     * @param Category $category
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CategoryFormRequest $request, Category $category)
    {
        $category = $category->create($request->all());

        return redirect()
            ->route('admin.catalog.categories.index', [$category]);
    }

    /**
     * Display the specified resource.
     * @param  int $id
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
        view()->share('menu', parent::menu());

        return view('admin_page.catalog.category.edit', [
            'category' => $category,
        ]);
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
     * @param Category $category
     * @return string
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return 'success';
    }

    /**
     * Change status
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|string
     */
    public function status(Request $request)
    {
        if ($request->ajax()) {

            $item = Category::find($request->input('id'));

            $item->active = 1 - $item->active;
            $item->save();

            $response = [
                'id'     => $item->id,
                'active' => $item->active,
            ];

            return json_encode($response);
        }

        return redirect()->route('admin.catalog.categories.index');
    }
}
