<?php

namespace App\Http\Controllers\Admin\Customer;

use App\Http\Controllers\Admin\IndexController;
use App\Http\Requests\Customer\ContactSourceFormRequest;
use App\Models\Customer\ContactSource;
use Illuminate\Http\Request;

class ContactSourceController extends IndexController
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        view()->share('menu', parent::menu());

        $data = ContactSource::orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->get();

        return view('admin_page.customer.contact_source.index', [
            'sources' => $data,
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

        return view('admin_page.customer.contact_source.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param ContactSourceFormRequest $request
     * @param ContactSource $source
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ContactSourceFormRequest $request, ContactSource $source)
    {
        $source->create($request->all());

        return redirect()
            ->route('admin.customer.contact-sources.index');
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
     * @param ContactSource $source
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(ContactSource $source)
    {
        view()->share('menu', parent::menu());

        return view('admin_page.customer.contact_source.edit', [
            'source' => $source,
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param ContactSourceFormRequest $request
     * @param ContactSource $source
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ContactSourceFormRequest $request, ContactSource $source)
    {
        $source->update($request->all());

        return redirect()
            ->route('admin.customer.contact-sources.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param ContactSource $source
     * @return string
     */
    public function destroy(ContactSource $source)
    {
        $source->delete();

        return 'success';
    }
}
