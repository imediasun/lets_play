<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Admin\IndexController;
use App\Models\User\User;
use App\Http\Requests\UserFormRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class UserController
 * @package App\Http\Controllers\Admin\User
 */
class UserController extends IndexController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        view()->share('menu', parent::menu());

        $data = User::orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->get();

        return view('admin_page.user.user.index', [
            'users' => $data,
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

        return view('admin_page.user.user.create',[]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserFormRequest $request, User $user)
    {
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        $user = $user->create($data);

        return redirect()->route('admin.user.users.index');
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
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        view()->share('menu', parent::menu());

        return view('admin_page.user.user.edit',[
            'user' => $user,
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserFormRequest $request, User $user)
    {
        $user->update($request->all());

        return redirect()->route('admin.user.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return 'success';
    }

    /**
     * Change status
     *
     * @param  int $id
     * @return JSON
     */
    public function status(Request $request)
    {
        if($request->ajax()){

            $item = User::find($request->input('id'));

            $item->activated = 1 - $item->activated;
            $item->save();

            $response = [
                "id" => $item->id,
                "active" => $item->activated
                ];
            return json_encode($response);
        }

        return redirect()->route('admin.user.users.index');
    }
}
