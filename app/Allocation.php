<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Allocation
 *
 * @property integer $id
 * @property string $name
 * @property integer $duty_day
 * @property integer $order_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Allocation whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Allocation whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Allocation whereDutyDay($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Allocation whereOrderId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Allocation whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Allocation whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property boolean $if_completed
 * @method static \Illuminate\Database\Query\Builder|\App\Allocation whereIfCompleted($value)
 */
class Allocation extends Model
{
    //
}
