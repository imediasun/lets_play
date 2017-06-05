<?php

namespace App\Http\Controllers\Admin\Order;

use App\Http\Controllers\Admin\IndexController;
use App\Http\Requests\OrderFormRequest;
use App\Models\Order\Order;
use App\Models\Order\Status;
use Illuminate\Http\Request;

/**
 * Class OrderController
 * @package App\Http\Controllers\Admin\Order
 */
class OrderController extends IndexController
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        view()->share('menu', parent::menu());

        $data = Order::orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->get();

        return view('admin_page.order.order.index', [
            'orders' => $data,
        ]);
    }

    /**
     * Show the form for cre
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        view()->share('menu', parent::menu());

        return view('admin_page.order.order.create',[
            'selStatuses' => Status::pluck('title', 'id'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param OrderFormRequest $request
     * @param Order $order
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(OrderFormRequest $request, Order $order)
    {
        $order = $order->create($request->all());

        return redirect()
            ->route('admin.order.orders.index', [$order]);
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
     * @param Order $order
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Order $order)
    {
        view()->share('menu', parent::menu());

        return view('admin_page.order.order.edit', [
            'order'       => $order,
            'selStatuses' => Status::pluck('title', 'id'),
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param OrderFormRequest $request
     * @param Order $order
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(OrderFormRequest $request, Order $order)
    {
        $order->update($request->all());

        return redirect()
            ->route('admin.order.orders.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param Order $order
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Order $order)
    {
        $order->delete();

        return redirect()
            ->route('admin.order.orders.index');
    }
}
