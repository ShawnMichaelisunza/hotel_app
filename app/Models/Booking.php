<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_id',
        'branch_loc',
        'room_offer',
        'add_offer',
        'first_name',
        'last_name',
        'phone_no',
        'email',
        'check_in',
        'check_out',
        'total_price',
        'status'
    ];
}
