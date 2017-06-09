<?php

namespace App\Http\Controllers\Admin\Customer;

use App\Http\Controllers\Admin\IndexController;
use App\Http\Requests\Customer\ContactTypeFormRequest;
use App\Models\Customer\ContactType;
use Illuminate\Http\Request;

/**
 * Class ContactTypeController
 * @package App\Http\Controllers\Admin\Customer
 */
class ContactTypeController extends IndexController
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        view()->share('menu', parent::menu());

        $data = ContactType::orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->get();

        return view('admin_page.customer.contact_type.index', [
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

        return view('admin_page.customer.contact_type.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param ContactTypeFormRequest $request
     * @param ContactType $type
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ContactTypeFormRequest $request, ContactType $type)
    {
        $type->create($request->all());

        return redirect()
            ->route('admin.customer.contact-types.index');
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
     * @param ContactType $type
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(ContactType $type)
    {
        view()->share('menu', parent::menu());

        return view('admin_page.customer.contact_type.edit', [
            'type' => $type,
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param ContactTypeFormRequest $request
     * @param ContactType $type
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ContactTypeFormRequest $request, ContactType $type)
    {
        $type->update($request->all());

        return redirect()
            ->route('admin.customer.contact-types.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param ContactType $type
     * @return string
     */
    public function destroy(ContactType $type)
    {
        $type->delete();

        return 'success';
    }
}
