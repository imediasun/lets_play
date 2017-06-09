<?php

namespace App\Http\Controllers\Admin\Customer;

use App\Http\Controllers\Admin\IndexController;
use App\Models\Customer\ContactSource;
use App\Models\Customer\ContactType;
use App\Models\Customer\Customer;
use App\Http\Requests\CustomerFormRequest;
use App\Models\Customer\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class CustomerController
 * @package App\Http\Controllers\Admin\Customer
 */
class CustomerController extends IndexController
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        view()->share('menu', parent::menu());

        $data = Customer::orderBy('created_at', 'desc')
            //->orderBy('updated_at', 'desc')
            ->get();

        return view('admin_page.customer.customer.index', [
            'customers' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        view()->share('menu', parent::menu());

        return view('admin_page.customer.customer.create', [
            'sel_groups'          => Group::where('active', '=', '1')->pluck('name', 'id'),
            'sel_contact_types'   => ContactType::pluck('title', 'id'),
            'sel_contact_sources' => ContactSource::pluck('title', 'id'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param CustomerFormRequest $request
     * @param Customer $customer
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CustomerFormRequest $request, Customer $customer)
    {
        $customer->create($request->all());

        return redirect()->route('admin.customer.customers.index');
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
     * @param Customer $customer
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Customer $customer)
    {
        view()->share('menu', parent::menu());

        return view('admin_page.customer.customer.edit', [
            'customer'            => $customer,
            'sel_groups'          => Group::where('active', '=', '1')->pluck('name', 'id'),
            'sel_contact_types'   => ContactType::pluck('title', 'id'),
            'sel_contact_sources' => ContactSource::pluck('title', 'id'),
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param CustomerFormRequest $request
     * @param Customer $customer
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CustomerFormRequest $request, Customer $customer)
    {
        $customer->update($request->all());

        return redirect()->route('admin.customer.customers.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param Customer $customer
     * @return string
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();

        return 'success';
    }
}
