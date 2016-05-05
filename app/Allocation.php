<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/**
 * App\Allocation
 *
 * @property integer $id
 * @property integer $staff_id
 * @property integer $duty_day
 * @property integer $order_id
 * @property boolean $if_completed
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Allocation whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Allocation whereStaffId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Allocation whereDutyDay($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Allocation whereOrderId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Allocation whereIfCompleted($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Allocation whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Allocation whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Allocation extends Model
{
    public static function AllocateOrder(Order $order){
        if($order->if_completed || $order->if_allocated){
            return false;
        }
        if($order->if_errands){
            
        }else{
            $staff = Staff::whereDutyDay(date("N",strtotime($order->appointment_date)));
            foreach ($staff as $tempStaff){
                $tempStaff = new Staff();
                //$tempStaff->
                //$queuedOrder =
            }
        }
    }
}
