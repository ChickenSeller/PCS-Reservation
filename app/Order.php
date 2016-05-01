<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Order
 *
 * @mixin \Eloquent
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
 */
class Order extends Model
{
    //
}
