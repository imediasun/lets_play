<?php

namespace App\Http\Controllers\Admin\Catalog;

use App\Http\Controllers\Admin\IndexController;
use App\Http\Requests\ProductFormRequest;
use App\Models\Catalog\Category;
use App\Models\Catalog\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class ProductController
 * @package App\Http\Controllers\Admin\Catalog
 */
class ProductController extends IndexController
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        view()->share('menu', parent::menu());

        $products = Product::orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->get();

        return view('admin_page.catalog.product.index', [
            'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        view()->share('menu', parent::menu());

        return view('admin_page.catalog.product.create', [
            'sel_categories' => Category::pluck('name', 'id'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param ProductFormRequest $request
     * @param Product $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ProductFormRequest $request, Product $product)
    {
        $product = $product->create($request->all());

        return redirect()
            ->route('admin.catalog.products.index', [$product]);
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
     * @param Product $product
     * @return string
     */
    public function edit(Product $product)
    {
        view()->share('menu', parent::menu());

        return view('admin_page.catalog.product.edit', [
            'sel_categories' => Category::pluck('name', 'id'),
            'product'        => $product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param ProductFormRequest $request
     * @param Product $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProductFormRequest $request, Product $product)
    {
        $product->update($request->all());

        return redirect()
            ->route('admin.catalog.products.index');

    }

    /**
     * Remove the specified resource from storage.
     * @param Product $product
     * @return string
     */
    public function destroy(Product $product)
    {
        $product->delete();

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

            $item = Product::find($request->input('id'));

            $item->active = 1 - $item->active;
            $item->save();

            $response = [
                'id'     => $item->id,
                'active' => $item->active,
            ];

            return json_encode($response);
        }

        return redirect()->route('admin.catalog.products.index');
    }
}
