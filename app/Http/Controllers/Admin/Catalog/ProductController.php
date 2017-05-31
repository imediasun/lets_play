<?php

namespace App\Http\Controllers\Admin\Catalog;

use App\Http\Controllers\Admin\IndexController;
use App\Http\Requests\ProductFormRequest;
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
        $this->user = Auth::user();
        $data['nav']['menu'] = parent::menu();

        $data['content']['products'] = Product::all();

        $this->template = 'admin_page/catalog/product/index';

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
     * @param Product $product
     * @return string
     */
    public function edit(Product $product)
    {
        $this->user = Auth::user();
        $data['nav']['menu'] = parent::menu();

        $data['content']['product'] = $product;

        $this->template = 'admin_page/catalog/product/edit';

        return $this->renderOutput($data);
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
            ->route('admin.catalog.products.index', [$product]);

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

    /**
     * Remove the specified resource from storage.
     * @param Product $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete(Product $product)
    {
        $product->delete();

        return redirect()
            ->route('admin.catalog.products.index');
    }
}
