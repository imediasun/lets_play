<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use App\Clientsgroup;
use App\Http\Controllers\MenuController;
use App\Dealsname;
class ClientsController extends IndexController
{
    public function clients_groups(){
        $this->user=Auth::user();
        //подключить меню
        $data['nav']['menu']=parent::menu();


        $data['content']=array();

        $data['content']['clients_groups']=Clientsgroup::orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->get();


        $this->template='admin_page/customers/clients_groups';


        $this->title = 'Панель администратора';





        return $this->renderOutput($data);
    }





    public function add_clients_group(Request $request){

        if($request->input('activate')=='on'){
            $activate=true;

        }
        else{$activate=false;}
        $clients_group_set_up=[
        'group_name'=>$request->input('name'),
        'description'=>$request->input('description'),
        'active'=>$activate,
        ];

        DB::table('clientsgroups')->insert($clients_group_set_up);
        return redirect('/admin/clients_groups');

    }

    public function edit_clients_group(Request $request){



        $clients_group_set_up=[
            'group_name'=>$request->input('name'),
            'description'=>$request->input('description')
        ];

        DB::table('clientsgroups')->where('id',$request->input('id'))->update($clients_group_set_up);
        return redirect('/admin/clients_groups');

    }

    public function func_edit_activation_clents_group(Request $request){

      

        if($request->input('activate')=='on'){
            $activate=true;

        }
        else{$activate=false;}

        $clients_group_set_up=[
            'active'=>$activate,
        ];

        DB::table('clientsgroups')->where('id',$request->input('id'))->update($clients_group_set_up);

    }


    public function func_delete_clients_group(Request $request){



        if( DB::table('clientsgroups')->where('id',$request->input('client_group'))->delete()){

            echo json_encode('deleted');
        }

    }

    public function deals_names(){
        $this->user=Auth::user();
        //подключить меню
        $data['nav']['menu']=parent::menu();


        $data['content']=array();

        $data['content']['deals_names']=Dealsname::orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->get();


        $this->template='admin_page/customers/deals_names';


        $this->title = 'Панель администратора';



        return $this->renderOutput($data);
    }

    public function add_deal(Request $request){


        $deal_set_up=[
            'deal_name'=>$request->input('name'),
            'description'=>$request->input('description')
        ];

        DB::table('dealsnames')->insert($deal_set_up);
        return redirect('/admin/deals_names');

    }

    public function edit_deal(Request $request){



        $deal_set_up=[
            'deal_name'=>$request->input('name'),
            'description'=>$request->input('description')
        ];

        DB::table('dealsnames')->where('id',$request->input('id'))->update($deal_set_up);
        return redirect('/admin/deals_names');

    }

    public function func_delete_deal(Request $request){

     

       if( DB::table('dealsnames')->where('id',$request->input('deal'))->delete()){
           
           echo json_encode('deleted');
       }
        
    }

}
