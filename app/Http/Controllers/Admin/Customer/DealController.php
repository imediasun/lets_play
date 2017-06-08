<?php

namespace App\Http\Controllers\Admin\Customer;

use App\Http\Controllers\Admin\IndexController;
use App\Http\Requests\CustomerDealFormRequest;
use App\Models\Customer\Deal;
use Illuminate\Http\Request;

/**
 * Class DealController
 * @package App\Http\Controllers\Admin\Customer
 */
class DealController extends IndexController
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        view()->share('menu', parent::menu());

        $data = Deal::orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->get();

        return view('admin_page.customer.deal.index', [
            'deals' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        view()->share('menu', parent::menu());

        return view('admin_page.customer.deal.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param CustomerDealFormRequest $request
     * @param Deal $deal
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CustomerDealFormRequest $request, Deal $deal)
    {
        $deal->create($request->all());

        return redirect()
            ->route('admin.customer.deals.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param Deal $deal
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Deal $deal)
    {
        view()->share('menu', parent::menu());

        return view('admin_page.customer.deal.edit', [
            'deal' => $deal,
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param CustomerDealFormRequest $request
     * @param Deal $deal
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CustomerDealFormRequest $request, Deal $deal)
    {
        $deal->update($request->all());

        return redirect()
            ->route('admin.customer.deals.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param Deal $deal
     * @return string
     */
    public function destroy(Deal $deal)
    {
        $deal->delete();

        return 'success';
    }
}
