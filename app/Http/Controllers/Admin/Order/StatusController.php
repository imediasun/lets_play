<?php

namespace App\Http\Controllers\Admin\Order;

use App\Http\Controllers\Admin\IndexController;
use App\Http\Requests\OrderStatusFormRequest;
use App\Models\Order\Status;
use Illuminate\Http\Request;

/**
 * Class StatusController
 * @package App\Http\Controllers\Admin\Order
 */
class StatusController extends IndexController
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        view()->share('menu', parent::menu());

        $data = Status::orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->get();

        return view('admin_page.order.status.index', [
            'statuses' => $data,
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

        return view('admin_page.order.status.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param OrderStatusFormRequest $request
     * @param Status $status
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(OrderStatusFormRequest $request, Status $status)
    {
        $status->create($request->all());

        return redirect()
            ->route('admin.order.orders-statuses.index');
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
     * @param Status $status
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Status $status)
    {
        view()->share('menu', parent::menu());

        return view('admin_page.order.status.edit', [
            'status' => $status,
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param OrderStatusFormRequest $request
     * @param Status $status
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(OrderStatusFormRequest $request, Status $status)
    {
        $status->update($request->all());

        return redirect()
            ->route('admin.order.orders-statuses.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param Status $status
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Status $status)
    {
        $status->delete();

        return redirect()
            ->route('admin.order.orders-statuses.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param Status $status
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete(Status $status)
    {
        $status->delete();

        return redirect()
            ->route('admin.order.orders-statuses.index');
    }
}
