<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    /**
     * @var mixed
     */
    private $userId;

    /**
     * @var mixed
     */
    private $eventName;

    /**
     * @var string
     */
    protected $table = 'events';

    /**
     * @var bool
     */
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['userId', 'eventName'];

}
