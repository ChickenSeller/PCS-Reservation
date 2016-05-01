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
class Staff extends Model
{
    protected  $table='staffs';
}
