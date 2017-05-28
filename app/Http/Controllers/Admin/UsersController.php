<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Http\Controllers\MenuController;

class UsersController extends IndexController
{
    public function users_groups(){
        $this->user=Auth::user();
        //подключить меню
        $data['nav']['menu']=parent::menu();


        $data['content']=array();

        $this->template='admin_page/customers/clients_groups';


        $this->title = 'Панель администратора';



        return $this->renderOutput($data);
    }

    public function add_users_group(Request $request){
        dd($request->input());
        
        $users_group_set_up=[
            
            
        ];

    }
}
