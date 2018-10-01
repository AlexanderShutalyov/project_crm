<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 24.09.2018
 * Time: 15:24
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
        'group_name',
        'start_date' => 'date',
        'finish_date' => 'date',
        'homecoming_date' => 'date',
        'direction_id' => 'integer',
    ];

    public function getQueueableRelations()
    {
        // TODO: Change the autogenerated stub
    }

}
