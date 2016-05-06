<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/**
 * App\Staff
 *
 * @property integer $id
 * @property string $name
 * @property integer $duty_day
 * @property string $free_time
 * @property string $residence
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Staff whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Staff whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Staff whereDutyDay($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Staff whereFreeTime($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Staff whereResidence($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Staff whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Staff whereUpdatedAt($value)
 * @mixin \Eloquent
 */
/*
 * free_time字段编码方法
 * 用整型数组表示
 * 下标0中的值表示是否有至少一段空闲时间，0为否，1为是
 * 下标从1到7分别对应一周的安排，其中的值如下定义
 * 0代表没有空
 * 1代表上午有空
 * 2代表下午有空
 * 如全天有空则把上下午值相加，即为3
 *
 */
class Staff extends Model
{
    protected  $table='staffs';
    
    static private function GetSuitableStaff($day,$timeMask){
        $result = array();
        $staffs = Staff::all();
        if($timeMask==3){
            foreach ($staffs as $staff){
                $freetime = json_decode($staff->free_time);
                if($freetime[0]!=1){
                    continue;
                }
                if($freetime[$day]>0){
                    array_push($result,$staff);
                }
            }
        }else{
            foreach ($staffs as $staff){
                $staff = new Staff();
                $freetime = json_decode($staff->free_time);
                if($freetime[0]!=1){
                    continue;
                }
                if($freetime[$day]==$timeMask){
                    array_push($result,$staff);
                }
            }
        }
        return $result;

    }
    
    public static function GetBestStaff(Order $order){
        $day =date("N",strtotime($order->appointment_date));
        $timeMaskStart = date('A',strtotime($order->start_time));
        $timeMaskEnd = date('A',strtotime($order->end_time));
        $timeMask =0;
        if($timeMaskStart==$timeMaskEnd){
            switch ($timeMaskStart){
                case "AM":
                    $timeMask=1;
                    break;
                case "PM":
                    $timeMask=2;
                    break;
                default:
            }
        }else{
            $timeMask =3;
        }
        $staffs = self::GetSuitableStaff($day,$timeMask);
        $bestStaff = -1;
        $leastOrders = -1;
        foreach ($staffs as $staffID){
            $queuedOrder = Allocation::where('staff_id',$staffID)->where('if_completed',false)->count();
            if($leastOrders==-1){
                $leastOrders =$queuedOrder;
                $bestStaff = $staffID;
            }else{
                if($queuedOrder< $leastOrders){
                    $leastOrders = $queuedOrder;
                    $bestStaff = $staffID;
                }
            }
        }
        return $bestStaff;
    }
}


