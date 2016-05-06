<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Order
 *
 * @property integer $id
 * @property string $name
 * @property string $stu_num
 * @property string $phone_num
 * @property string $location
 * @property boolean $if_errands
 * @property string $description
 * @property boolean $if_completed
 * @property boolean $if_allocated
 * @property string $appointment_date
 * @property string $start_time
 * @property string $end_time
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereStuNum($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order wherePhoneNum($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereLocation($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereIfErrands($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereIfCompleted($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereIfAllocated($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereAppointmentDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereStartTime($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereEndTime($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Order extends Model
{

    static public function AddNewOrder($arr){
        $newOrder = new Order();
        $newOrder->name = $arr['name'];
        $newOrder->stu_num = $arr['stu_num'];
        $newOrder->phone_num = $arr['phone_num'];
        $newOrder->location = $arr['location'];
        $newOrder->if_errands = $arr['if_errands'];
        $newOrder->description = $arr['description'];
        $newOrder->if_completed = false;
        $newOrder->if_allocated = false;
        $newOrder->appointment_date = $arr['appointment_date'];
        $newOrder->start_time = $arr['start_time'];
        $newOrder->end_time = $arr['end_time'];
        $newOrder->save();
        return $newOrder;
    }
    
}
