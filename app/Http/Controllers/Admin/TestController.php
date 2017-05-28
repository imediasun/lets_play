<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Gate;

class TestController extends IndexController
{
    public function __construct()
    {
        parent::__construct();

        $this->template = 'admin_page';
    }

    public function index()
    {
        $this->user = Auth::user();

        dump(
            Gate::denies('VIEW_ADMIN'),
            Gate::denies('ADMIN_USERS'),
            Gate::denies('SELF_ADMIN')
        );

        if (Gate::denies('VIEW_ADMIN')) {
            abort(403);
        }
    }
}
