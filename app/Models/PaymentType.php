<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentType extends Model
{
    use HasFactory;

    protected $table = 'payment_types';

    protected $fillable = ['payment_type', 'status'];

    public static $STATUS_ON = 1;

    public static $STATUS_OFF = 0;


}
