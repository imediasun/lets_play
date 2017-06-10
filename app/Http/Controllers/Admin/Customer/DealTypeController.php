<?php

namespace App\Http\Controllers\Admin\Customer;

use App\Http\Controllers\Admin\IndexController;
use App\Http\Requests\Customer\DealTypeFormRequest;
use App\Models\Customer\DealType;
use Illuminate\Http\Request;

/**
 * Class DealTypeController
 * @package App\Http\Controllers\Admin\Customer
 */
class DealTypeController extends IndexController
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        view()->share('menu', parent::menu());

        $data = DealType::orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->get();

        return view('admin_page.customer.deal_type.index', [
            'types' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        view()->share('menu', parent::menu());

        return view('admin_page.customer.deal_type.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param DealTypeFormRequest $request
     * @param DealType $type
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(DealTypeFormRequest $request, DealType $type)
    {
        $type->create($request->all());

        return redirect()
            ->route('admin.customer.deals-types.index');
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
     * @param DealType $type
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(DealType $type)
    {
        view()->share('menu', parent::menu());

        return view('admin_page.customer.deal_type.edit', [
            'type' => $type,
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param DealTypeFormRequest $request
     * @param DealType $type
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(DealTypeFormRequest $request, DealType $type)
    {
        $type->update($request->all());

        return redirect()
            ->route('admin.customer.deals-types.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param DealType $type
     * @return string
     */
    public function destroy(DealType $type)
    {
        $type->delete();

        return 'success';
    }
}
