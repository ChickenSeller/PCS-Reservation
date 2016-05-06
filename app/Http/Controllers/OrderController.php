<?php

namespace App\Http\Controllers;

use App\Allocation;
use App\Order;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class OrderController extends Controller
{
    public function getAddOrder(){
        return date("Y-m-d H:i:s",strtotime("2016-05-06T23:00"));
        //return "同学登记界面";
    }
    public function postAddOrder(){
        $arr = array(

                'name'=>Input::get('name'),
                'stu_num'=>Input::get('stu_num'),
                'phone_num'=>Input::get('phone_num'),
                'location'=>Input::get('location'),
                'description'=>Input::get('description'),
                'appointment_date'=>Input::get('appointment_date'),
                'start_time'=>Input::get('start_time'),
                'end_time'=>Input::get('end_time')
        );
        if(Input::get('if_errands')=="true"){
            $arr['if_errands']=true;
        }else{
            $arr['if_errands']=false;
        }
        $order = Order::AddNewOrder($arr);
        $allocation = Allocation::AllocateOrder($order);
        $info = Allocation::GetAllocationInfo($allocation);
        echo json_encode($info);
        echo "<br />";
        Allocation::CompleteAllocation($allocation);
        $info = Allocation::GetAllocationInfo($allocation);
        echo json_encode($info);
    }
}
