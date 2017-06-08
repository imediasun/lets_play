<?php

namespace App\Http\Controllers\Admin\Customer;

use App\Http\Controllers\Admin\IndexController;
use App\Models\Customer\Group;
use App\Http\Requests\GroupFormRequest;
use Illuminate\Http\Request;

/**
 * Class GroupController
 * @package App\Http\Controllers\Admin\Customer
 */
class GroupController extends IndexController
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        view()->share('menu', parent::menu());

        $data = Group::orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->get();

        return view('admin_page.customer.group.index', [
            'groups' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        view()->share('menu', parent::menu());

        return view('admin_page.customer.group.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param GroupFormRequest $request
     * @param Group $group
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(GroupFormRequest $request, Group $group)
    {
        $group = $group->create($request->all());

        return redirect()->route('admin.customer.groups.index');
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
     * @param Group $group
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Group $group)
    {
        view()->share('menu', parent::menu());

        return view('admin_page.customer.group.edit', [
            'group' => $group,
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param GroupFormRequest $request
     * @param Group $group
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(GroupFormRequest $request, Group $group)
    {
        $group->update($request->all());

        return redirect()->route('admin.customer.groups.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param Group $group
     * @return string
     */
    public function destroy(Group $group)
    {
        $group->delete();

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

            $item = Group::find($request->input('id'));

            $item->active = 1 - $item->active;
            $item->save();

            $response = [
                "id"     => $item->id,
                "active" => $item->active,
            ];

            return json_encode($response);
        }

        return redirect()->route('admin.customer.groups.index');
    }
}
