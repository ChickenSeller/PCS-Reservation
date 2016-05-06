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

        $allocation = new Allocation();
        if($order->if_errands){
            $allocation->staff_id = Staff::GetBestStaff($order);
            $allocation->order_id = $order->id;
            $allocation->if_completed = false;
            $allocation->duty_day = date("N",strtotime($order->appointment_date));
        }else{
            $allocation->staff_id = self::GetBestStaff(strtotime($order->appointment_date));
            $allocation->order_id = $order->id;
            $allocation->if_completed = false;
            $allocation->duty_day = date("N",strtotime($order->appointment_date));
        }
        
        $order->if_allocated = true;
        $order->save();
        $allocation->save();
        return $allocation;
    }

    public static function GetBestStaff($day){
        $staff = Staff::whereDutyDay(date("N",$day))->get();
        $bestStaff = -1;
        $leastOrders = -1;
        foreach ($staff as $tempStaff){
            $queuedOrder = Allocation::where('staff_id',$tempStaff->id)->where('if_completed',false)->count(); //StaffId($tempStaff->id)
            if($leastOrders==-1){
                $leastOrders =$queuedOrder;
                $bestStaff = $tempStaff->id;
            }else{
                if($queuedOrder< $leastOrders){
                    $leastOrders = $queuedOrder;
                    $bestStaff = $tempStaff->id;
                }
            }
        }
        return $bestStaff;
    }

    public static function GetAllocationInfo(Allocation $allocation){
        $staff = Staff::find($allocation->staff_id);
        echo $allocation->staff_id;
        echo $allocation->order_id;
        if($staff==null){
            return false;
        }
        $order = Order::find($allocation->order_id);
        if($order==null){
            return false;
        }
        $result = new AllocationInfo();
        $result->Allocation = $allocation;
        $result->Order = $order;
        $result->Staff = $staff;
        return $result;
    }

    public static function CompleteAllocation(Allocation $allocation){
        $allocation->if_completed = true;
        $order = Order::find($allocation->order_id);
        if($order==null){
            return false;
        }
        if($order->if_allocated==false){
            return false;
        }
        $order->if_completed = true;
        $order->save();
        return true;
    }
    
    
}
class AllocationInfo{
    public $Staff;
    public $Order;
    public $Allocation;
}
