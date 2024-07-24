<?php

namespace App\Enums;

enum PaymentStatus
{
    case Pending = 'pending';
    case Paid = 'paid';
    case Failed = 'failed';
}
