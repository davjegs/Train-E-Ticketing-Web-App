<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'ticket_id', 'uniqueid','payment_status', 'active_status','boarding_station', 'destination_station', 'usage_date', 'ticket_type',
        'ticket_duration', 'number_of_passenger', 'luggage', 'luggage_weight',

    ];
    protected $attributes = [
        'payment_status' => 'Unpaid',
        'active_status' => 'Inactive',
    ];
}
